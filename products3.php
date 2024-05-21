<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <a href="product_detail.php?name=<?php echo urlencode('Optimum Nutrition Gold Standard 100% Whey'); ?>">
                        <img src="images/b.jpg" alt="">
                    </a>
                    <div class="caption">
                        <h3>Men Full set</h3>
                        <p>EGP 1,800</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
            </div>


            <div class="item">
                    <img src="images/c.jpg" alt="">
                    <div class="caption">
                        <h3>Women Full Set</h3>
                        <p>EGP 2,000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="images/k.jpg" alt="">
                    <div class="caption">
                        <h3>Women White shirt</h3>
                        <p>EGP 400</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>
    </div>

    <div class="row">
    <div class="item">
                    <img src="images/h.jpg" alt="">
                    <div class="caption">
                        <h3>Women Black Shirt</h3>
                        <p>EGP 450</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>


            <div class="item">
                    <img src="images/i.jpg" alt="">
                    <div class="caption">
                        <h3>Women Green Set</h3>
                        <p>EGP 1,800</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(21)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=21" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>



            <div class="item">
                    <img src="images/clothes-slider-2.png" alt="">
                    <div class="caption">
                        <h3>Mint Sneakers</h3>
                        <p>EGP 900</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(22)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=14" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>
    </div>

    <div class="row">
    <div class="item">
                    <img src="images/clothes-slider-3.png" alt="">
                    <div class="caption">
                        <h3>Women Full set</h3>
                        <p>EGP 3000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(23)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=23" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="images/clothes-slider-4.png" alt="">
                    <div class="caption">
                        <h3>Blue Sneakers</h3>
                        <p>EGP 1000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(24)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=24" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="images/clothes-slider-1.png" alt="">
                    <div class="caption">
                        <h3>Men Full set</h3>
                        <p>EGP 1800</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(25)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=25" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

    </div>

        <div class="row">
            <div class="item">
                    <img src="images/clothes-slider-6.png" alt="">
                    <div class="caption">
                        <h3>Blue Backpack</h3>
                        <p>EGP 600</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(26)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=26" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="images/e.jpg" alt="">
                    <div class="caption">
                        <h3>Men White set</h3>
                        <p>EGP 1,900</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(27)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=27" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="images/f.jpg" alt="">
                    <div class="caption">
                        <h3></h3>
                        <p>EGP 1,395</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(28)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=28" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

        </div>
    </div>

    <?php include("includes/footer.php"); ?>
</body>

</html>