<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.html');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE user_item SET status=2 WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status= 1 ";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FlexZone</title>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css2/main.css">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>

        <div class="container">
            <div class="success">
               
                <div>
                      <h3 align="center">YAY!! Your order is confirmed. Thank you for shopping with us.</h3><hr>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>