<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!--CSS-->
    <link rel="stylesheet" href="account.css" type="text/css">
    <link rel="stylesheet" href="/online_shop/navbar_background.css" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
</head>

<?php
session_start();
include __DIR__ . "/../mySQL_scripts/fetch_logged_user.php";
?>

<body>
    <div class="header-wrap">
        <div class="header-logo"><i class="fa-solid fa-shop" style="color: #ed2939;"></i>ShopIT</div>
        <nav>
            <ol>
                <?php if (isset($user)): ?>
                    <li>Hello <span style="color: var(--light-red);"><?= htmlspecialchars($user["name"]) ?></span></li>
                    <li><a class="store-href-cy" href="index.php" style="color: var(--light-red);">Store</a></li>
                    <li><a class="account-href-cy" href="account-login/login.php">Account</a></li>
                <?php else: ?>
                    <li><a class="store-href-cy" href="index.php" style="color: var(--light-red);">Store</a></li>
                    <li><a class="account-href-cy" href="account-login/login.php">Account</a></li>
                <?php endif; ?>
            </ol>
        </nav>
    </div>
    <main>
        <div class="main-content-wrap">
            <div>
            <?php if (isset($user)): ?>
                    <a class="logout-cy" href="logout_func.php">Logout</a>
            <?php endif; ?>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>