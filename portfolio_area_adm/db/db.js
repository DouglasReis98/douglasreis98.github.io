const mysql = require('mysql');

const pool = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'portfolio'
})

module.exports = pool