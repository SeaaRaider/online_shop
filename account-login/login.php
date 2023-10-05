<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <!--CSS-->
    <link rel="stylesheet" href="login.css" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
</head>

<body>

<?php include 'login_func.php';?>

    <div class="header-wrap">
        <div class="header-logo"><i class="fa-solid fa-shop" style="color: var(--light-red);"></i>ShopIT</div>
        <nav>
            <ol>
                <li><a href="/online_shop/index.php">Store</a></li>
                <li><a href="login.php" style="color: var(--light-red);">Account</a></li>
            </ol>
        </nav>
    </div>
    <main>
        <div class="main-content-wrap">
            <div class="main-content-log-in">
                <form method="post" novalidate>
                    <?php if ($is_invalid): ?>
                        <p>Invalid login</p>
                    <?php endif; ?>
                    <div class="input-box">
                        <i class="fa-solid fa-envelope"></i>
                        <input class="email-cy" type="text" name="email" placeholder="Email" required
                        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-lock"></i>
                        <input class="password-cy" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="button-box">
                        <button class="submit-log-in submit-cy" name="submit">Login</button>
                    </div>
                </form>
                <div>
                    <a class="register-cy" href="register.html">Register here</a>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>