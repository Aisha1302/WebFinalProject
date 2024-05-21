<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FlexZone</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css2/main.css">

</head>

<body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <div class="container" id="content">
        <div class="row">
        <div class="item">
                <div class="thumbnail">
                    <a href="product_detail.php?name=<?php echo urlencode('Optimum Nutrition Gold Standard 100% Whey'); ?>">
                        <img src="images/gym1.jpg" alt="">
                    </a>
                    <div class="caption">
                        <h3>Full Gym Package</h3>
                        <p>EGP 10,000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="item">
                <div class="thumbnail">
                    <img src="images/gym2.jpg" alt="">
                    <div class="caption">
                        <h3>Tradmill</h3>
                        <p>EGP 5,000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="thumbnail">
                    <img src="images/gym3.jpg" alt="">
                    <div class="caption">
                        <h3>Lat Pulldown Machine</h3>
                        <p>EGP 4,800</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>



        <div class="row">
          
            <div class="item">
                <div class="thumbnail">
                    <img src="images/gym4.jpg" alt="">
                    <div class="caption">
                        <h3>Leg Curl Machine</h3>
                        <p>EGP 3,800</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("includes/footer.php"); ?>
</body>

</html>