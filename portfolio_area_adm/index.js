const express = require("express");
const exphbs = require("express-handlebars");
const app = express();
const bcrypt = require('bcrypt')
const flashCard = require('express-flash')
const pool = require('./db/db');

//console.log(pool)

const hbs = exphbs.create({
    partialsDir: ['views/partials/']
});

app.engine('handlebars', hbs.engine);
app.set('view engine', 'handlebars');
app.set('views', './views');

app.use(express.urlencoded({
    extended: true
})
)

app.use(express.static("public"))

// flash messages
//app.use(flashCard())

// Rotas

app.get('/', (req, res) => {

    let qtySites = `SELECT count(*) AS totalSites FROM projetos WHERE categoria = 1`
    let qtyAppWeb = `SELECT count(*) AS totalAppWeb FROM projetos WHERE categoria = 2`
    let qtyAppMobile = `SELECT count(*) AS totalAppMobile FROM projetos WHERE categoria = 3`
    let qtyProjetos = `SELECT count(*) AS total FROM projetos`
    //console.log(qtySites, qtyAppWeb, qtyAppMobile)

    let script = ``

    pool.query(qtySites, (err, resultado) => {
        if (err) {
            console.log(err)
            return
        }

        let numSites = resultado[0].totalSites;            

        pool.query(qtyAppWeb, (err, resultado) => {
            if (err) {
                console.log(err)
                return
            }

            let numAppWeb = resultado[0].totalAppWeb;

            pool.query(qtyAppMobile, (err, resultado) => {
                if (err) {
                    console.log(err)
                    return
                }

                let numAppMobile = resultado[0].totalAppMobile;

                pool.query(qtyProjetos, (err, resultado) => {
                    if (err) {
                        console.log(err)
                        return
                    }

                    let numTotal = resultado[0].total;

        //console.log(numSites, numAppWeb, numAppMobile, numTotal)
        res.render('home', {
            auth: true,
            style: 'style.css',
            script: 'grafico.js',
            numSites,
            numAppWeb,
            numAppMobile,
            numTotal
        }
        )
                })
            })
        })
    })

    //res.send('home')

})

app.get('/login', (req, res) => {

    res.render('login', {
        auth: false,
        style: 'style_login.css'
    })
    //res.send('login')
})

app.post('/login', (req, res) => {

    
    const {usuario, senha} = req.body
    
    // se o usuario estiver correto

    const usuarioLogin = `SELECT * FROM projetos WHERE usuario = ${usuario}`;

    if (!usuarioLogin) {
        console.log("Usuário não encontrado")
        //req.flash("message", "Usuário não encontrado!")
    } else {
        console.log("Achei!")
    }

    // se o usuario estiver correto

    res.render('login', {
        auth: false,
        style: 'style_login.css'
    })
    //res.send('login')
})

app.get('/cadastrar-projeto', (req, res) => {

    res.render('form_projeto', {
        auth: true,
        style: 'style.css',
        style2: 'cadastrar_editar.css',
        header: 'Criar Novo',
        action: '/cadastrar-projeto/cadastrar',
        script: 'editor_texto.js'
    })
    //res.send('cadastrar-projeto')
})

app.post('/cadastrar-projeto/cadastrar', (req, res) => {
    const titulo = req.body.titulo;
    const imagem = req.body.imagem;
    const categoria = req.body.categoria;
    const descricao = req.body.descricao;
    const cliente = req.body.cliente;
    const data = req.body.data;
    const tags = req.body.tags;
    const url = req.body.url;

    const sql = `INSERT INTO projetos (??, ??, ??, ??, ??, ??, ??, ??) VALUES (?, ?, ?, ?, ?, ?, ?, ?, )`;
    const dados = ['titulo', 'imagem', 'categoria', 'descricao', 'cliente', 'data', 'tags', 'url', titulo, imagem, categoria, descricao, cliente, data, tags, url]
    pool.query(sql, dados, (err) => {

        if (err) {
            console.log(err)
            return
        }

        res.redirect('/gerenciar-projetos')
    })
})

app.get('/editar/:id', (req, res) => {
    const id = req.params.id;

    const sql = `SELECT * FROM projetos WHERE ?? = ?`;
    const dados = ['id', id];

    pool.query(sql, dados, (err, data) => {

        if (err) {
            console.log(err);
            return
        }

        const proj = data[0]

        res.render('form_projeto', {
            proj,
            auth: true,
            style: 'style.css',
            style2: 'cadastrar_editar.css',
            header: 'Editar',
            action: '/editar/concluir',
            script: 'editor_texto.js'
        })
    })
})

app.post('/editar/concluir', (req, res) => {
    const id = req.body.id;
    const titulo = req.body.titulo;
    const imagem = req.body.imagem;
    const categoria = req.body.categoria;
    const descricao = req.body.descricao;
    const cliente = req.body.cliente;
    const data = req.body.data;
    const tags = req.body.tags;
    const url = req.body.url;

    const sql = `UPDATE projetos SET titulo  = '${titulo}',  imagem  = '${imagem}',  categoria  = '${categoria}', descricao  = '${descricao}', cliente  = '${cliente}', data  = '${data}', tags  = '${tags}', url  = '${url}' WHERE id = ${id}`
    //const dados = ['titulo', 'imagem', 'categoria', 'descricao', 'cliente', 'data', 'tags', 'url', titulo, imagem, categoria, descricao, cliente, data, tags, url]


    pool.query(sql, (err) => {
        if (err) {
            console.log(err)
        }
        res.redirect('/gerenciar-projetos')
    })
})

app.post('/excluir/:id', (req, res) => {
    const id = req.params.id;

    const sql = `DELETE FROM projetos WHERE id = ${id}`

    pool.query(sql, (err) => {
        if (err) {
            console.log(err)
        }

        res.redirect('/gerenciar-projetos')
    })

})

app.get('/gerenciar-projetos', (req, res) => {

    const sql = "SELECT * FROM projetos"

    pool.query(sql, (err, dados) => {

        if (err) {
            console.log(err)
        }

        const projDados = dados;

        res.render('gerenciar_projetos', {
            projDados,
            auth: true,
            style: 'style.css',
            style2: 'gerenciar_projetos.css',
        })
    })

})

app.get('/gerenciar-categorias', (req, res) => {
    //res.render('gerenciar-categorias')

    const sql = "SELECT * FROM categorias"

    pool.query(sql, (err, dados) => {

        if (err) {
            console.log(err)
        }

        const categDados = dados;


        res.render('gerenciar_categorias', {
            categDados,
            auth: true,
            style: 'style.css',
            style2: 'gerenciar_categorias.css'
        })
    })
})

app.post('/gerenciar-categorias/cadastrar', (req, res) => {
    const categoria = req.body.categoria;

    const sql = `INSERT INTO categorias (categoria) VALUES ('${categoria}')`

    pool.query(sql, (err) => {

        if (err) {
            console.log(err)
        }

        res.redirect('/gerenciar-categorias')
    })

})

app.post('/gerenciar-categorias/excluir/:id', (req, res) => {
    const id = req.params.id;

    const sql = `DELETE FROM categorias WHERE id = ${id}`

    pool.query(sql, (err) => {

        if (err) {
            console.log(err)
        }

        res.redirect('/gerenciar-categorias')
    })
})


app.get('/gerenciar-dados', (req, res) => {
    const sql = `SELECT * FROM usuarios`;

    pool.query(sql, (err, dados) => {

        if (err) {
            console.log(err)
        }

        const user = dados[0];


        res.render('gerenciar_dados', {
            user,
            auth: true,
            style: 'style.css',
            style2: 'gerenciar_dados.css'
        })
    })
})

app.post('/gerenciar-dados/changePassword', (req, res) => {
    const senha = req.body.senha;
    
    const salt = bcrypt.genSaltSync(10);
    const cryptedSenha = bcrypt.hashSync(senha, salt)


    const sql = `UPDATE usuarios SET senha = '${cryptedSenha}'`

    pool.query(sql, (err) => {
        if (err) {
            console.log(err)
        }
        res.redirect('/');

        // res.render('gerenciar_dados', { senha })
    })

});


pool.connect((err) => {

    if (err) {
        console.log(err)
    }

    app.listen(3000, console.log("Programa Rodando"))
})

// app.listen(3000, console.log("Programa Rodando"))