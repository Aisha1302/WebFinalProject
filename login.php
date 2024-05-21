<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: index.html');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FlexZone</title>

        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css2/main.css">
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
            
                <div class="login">
                                <h2>LOGIN</h2>
                            <div class="login-body">
                                <p class="text-main">Login to make a purchase<p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-input">
                                        <input type="email"  placeholder="Email" autofocus="on" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-input">
                                        <input type="password" placeholder="Password" name="password" required = "true">
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn-primary submit">Login</button><br><br>
                                    <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="register"><p>Don't have an account? <a href="signup.php">SignUp</a></p></div>
                </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>