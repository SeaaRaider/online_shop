<?php

$mysqli = require __DIR__ . "/../mySQL_scripts/database_conn.php";

if(empty($_POST["username"]))
{
    die("Name is required");
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
{
    die("Valid E-mail is required");
}

if(strlen($_POST["password"])<8)
{
    die("Password must be at least 8 characters");
}

if(! preg_match("/[a-z]/i", $_POST["password"]))
{
    die("Password must contain at least one latin letter");
}

if(! preg_match("/[0-9]/i", $_POST["password"]))
{
    die("Password must contain at least one number");
}

if($_POST["password"] !== $_POST["password_confirmation"])
{
    die("Password does not match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/../mySQL_scripts/database_conn.php";

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES(?,?,?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql))
{
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                    $_POST["username"],
                    $_POST["email"],
                    $password_hash);

try
{
    $stmt->execute();
}
catch (mysqli_sql_exception $exc)
{
    if ($exc->getCode() == 1062)
    {
        die("email address is already taken");
    }
}

header("Location: login.php");

