const express = require("express");
const exphbs = require("express-handlebars");
const app = express();
const mysql = require('mysql');

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

// Rotas

app.get('/', (req, res) => {
    res.render('home', {
        auth: true,
        style: 'style.css'
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

app.get('/cadastrar-projeto', (req, res) => {
    res.render('cadastrar_projeto', {
        auth: true,
        style: 'style.css',
        style2: 'cadastrar_editar.css'
    })
    //res.send('cadastrar-projeto')
})

app.post('/cadastrar-projeto/cadastrar', (req, res) => {
    const titulo = req.body.titulo;
    const imagem = req.body.imagem;
    const descricao = req.body.descricao;
    const cliente = req.body.cliente;
    const data = req.body.data;
    const tags = req.body.tags;
    const url = req.body.url;

    const sql = `INSERT INTO projetos (titulo, imagem, descricao, cliente, data, tags, url) VALUES ('${titulo}', '${imagem}', '${descricao}', '${cliente}', '${data}', '${tags}', '${url}')`

    conn.query(sql, (err) => {

        if (err) {
            console.log(err)
            return
        }

        res.redirect('/gerenciar-projetos')
    })
})

app.get('/editar-projeto', (req, res) => {
    //res.render('gerenciar-projetos')
    res.render('editar_projeto', {
        auth: true,
        style: 'style.css',
        style2: 'cadastrar_editar.css'
    })
})

app.get('/gerenciar-projetos', (req, res) => {

    const sql = "SELECT * FROM projetos"

    conn.query(sql, (err, dados) => {

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
    res.render('gerenciar_categorias', {
        auth: true,
        style: 'style.css',
        style2: 'gerenciar_categorias.css'
    })
})

app.get('/gerenciar-dados', (req, res) => {
    //res.render('gerenciar-dados')
    res.render('gerenciar_dados', {
        auth: true,
        style: 'style.css',
        style2: 'gerenciar_dados.css'
    })
})

const conn = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'portfolio'
})

conn.connect((err) => {

    if (err) {
        console.log(err)
    }

    app.listen(3000, console.log("Programa Rodando"))
})

// app.listen(3000, console.log("Programa Rodando"))