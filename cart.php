<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
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

        <div class="cart">
                <table class="cart-table">
                    <!-- Show table only if there are items added in the cart -->
                    <?php
                    $total_amount = 0;
                    $user_id = $_SESSION['user_id'];
                    $query = "SELECT items.price AS Price, items.id As id, items.name AS Name, user_item.quantity AS Quantity FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' AND `status`=1";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    if (mysqli_num_rows($result) >= 1) {
                    ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sum = 0;
                            $id = '';
                            while ($row = mysqli_fetch_array($result)) {
                                $total_price = $row["Price"] * $row["Quantity"];
                                $sum += $total_price;
                                $id .= $row["id"] . ", ";
                                echo "<tr>";
                                echo "<td>#{$row['id']}</td>";
                                echo "<td>{$row['Name']}</td>";
                                echo "<td>EGP {$row['Price']}</td>";
                                echo "<td>{$row['Quantity']}</td>";
                                echo "<td>EGP {$total_price}</td>";
                                echo "<td><a href='cart-remove.php?id={$row['id']}' class='remove-item'>Remove</a></td>";
                                echo "</tr>";
                            }
                            $id = rtrim($id, ", ");
                            echo "<tr><td></td><td>Total</td><td></td><td>EGP" . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn-primary'>Confirm Order</a></td></tr>";
                            ?>
                        </tbody>
                    <?php } else {
                        echo "<tr><td colspan='6'>Heyy!! Your Cart is Empty. Please add items to the cart first!</td></tr>";
                    } ?>
                </table>
        </div>

    <?php include("includes/footer.php"); ?>
</body>

</html>