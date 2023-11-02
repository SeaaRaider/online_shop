var pool = require('/../mySQL_scripts/database_conn.cjs');

app.post('/login', (req, res) =>{
    pool.query('SELECT * FROM user WHERE email =?', [req.body.id], (err, res)=>{
        if(err) throw err;
        console.log("Sucess");
    })
})

// <?php

// $is_invalid = false;

// if ($_SERVER['REQUEST_METHOD'] === 'POST')
// {
//     $mysqli = require __DIR__ . "/../mySQL_scripts/database_conn.php";

//     $sql = sprintf("SELECT * FROM user
//             WHERE email ='%s'",
//             $mysqli -> real_escape_string($_POST["email"]));

//     $result = $mysqli->query($sql);

//     $user = $result->fetch_assoc();

//     if($user)
//     {
//         if(password_verify($_POST["password"], $user["password_hash"]))
//         {
//             session_start();

//             session_regenerate_id();

//             $_SESSION["user_id"] = $user["id"];

//             header("Location: /online_shop/index.php");
//             exit;
//         }
//     }

//     $is_invalid = true;
// }