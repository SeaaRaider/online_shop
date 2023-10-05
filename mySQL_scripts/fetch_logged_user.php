<?php

if(isset($_SESSION["user_id"]))
{
    $mysqli = require __DIR__ . "/database_conn.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}