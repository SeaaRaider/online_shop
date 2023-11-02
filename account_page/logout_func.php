<?php

session_start();

session_destroy();

header("Location: /online_shop/index.php");
exit;