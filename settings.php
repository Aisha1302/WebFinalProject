<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FlexZone</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css2/main.css">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container">
            <div class="change-password">
                    <h2>Change Password</h2>
                    <form action="settings_script.php" method="POST">
                        <div class="form-input">
                            <input type="password" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-input">
                            <input type="password" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn-primary submit">Change</button>
                       <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    </form>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>