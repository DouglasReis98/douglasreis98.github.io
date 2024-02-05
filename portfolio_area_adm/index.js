const express = require("express");
const exphbs = require("express-handlebars");
const app = express();

const hbs = exphbs.create({
    partialsDir: ['views/partials/']
});

app.engine('handlebars', hbs.engine);
app.set('view engine', 'handlebars');
app.set('views', './views');

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
    res.render('cadastrar_projetos')
    //res.send('cadastrar-projeto')
})

app.get('/gerenciar-projeto', (req, res) => {
    //res.render('gerenciar-projeto')
    res.send('gerenciar-projeto')
})

app.get('/gerenciar-categorias', (req, res) => {
    //res.render('gerenciar-categorias')
    res.send('gerenciar-categorias')
})

app.get('/gerenciar-dados', (req, res) => {
    //res.render('gerenciar-dados')
    res.send('gerenciar-dados')
})

app.get('/gerenciar-projetos', (req, res) => {
    //res.render('gerenciar-projetos')
    res.send('gerenciar-projetos')
})

app.listen(3000, console.log("Programa Rodando"))