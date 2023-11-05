const express = require('express')
const path = require('path')
const mysql = require('mysql')
const dotenv = require('dotenv')

const app = express()

dotenv.config({path: './.env'})

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use(express.static(path.join(__dirname, 'public')));

const db = mysql.createConnection({
    host: process.env.DATABASE_HOST,
    user: process.env.DATABASE_USER,
    password: process.env.DATABASE_PASSWORD,
    database: process.env.DATABASE
})

db.connect((error) =>{
    if(error) {
        console.log(error)
    }
    else {
        console.log('Connection established with MySQL')
    }
})

app.get('/', (req, res) =>{
    res.render('index')
});

app.get('/login', (req, res) =>{
    res.render('login')
});

app.get('/account', (req, res) =>{
    res.render('account')
});

app.get('/register', (req, res) =>{
    res.render('register')
});

app.listen(3000)