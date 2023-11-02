var mysql = require('mysql');

var pool = mysql.createPool({
    connectionLimit: 10,
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'login_db'
});

pool.getConnection((err,connection)=> {
    if(err)
    throw err;
    console.log('Database connected successfully');
    connection.release();
});

module.exports = pool


// <?php

// $host = "localhost";
// $dbname = "login_db";
// $username = "root";
// $password = "";

// $mysqli = new mysqli(hostname: $host, username: $username, password: $password, database: $dbname);

// if($mysqli->connect_errno)
// {
//     die("Connection error: " . $mysqli->connect_error);
// }

// return $mysqli;
// ?>