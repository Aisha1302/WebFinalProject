<?php
require("includes/common.php");
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
                <div class="signUp">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-input">
                                <input placeholder="Name" autofocus="on" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-input">
                                <input type="email"  placeholder=" Enter a valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>
                            </div>
                            <div class="form-input">
                                <input type="password" placeholder="Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required = "true">
                            </div>
                            <div class="form-input">
                                <input type="text"  placeholder="Contact (ex. 8444844863)" maxlength="10" size="10" name="contact" required = "true"><?php if(isset($_GET['m2'])) echo $_GET['m2']; ?>
                            </div>
                            <div class="form-input">
                                <input  type="text"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-input">
                                <input  type="text"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn-primary submit">Submit</button>
                        </form>
                    </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>