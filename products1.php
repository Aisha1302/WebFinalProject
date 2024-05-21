<?php
//^ establish the connection to database, and start the session
require("includes/common.php");
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
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <div class="container" id="content">


    <div class="row">
    <div class="item">
                    <img src="img/23.png" alt="">
                    <div class="caption">
                        <h3>Optimum Nutrition Gold Standard 100% Isolate Whey</h3>
                        <p>EGP 5,000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="img/24.png" alt="">
                    <div class="caption">
                        <h3>Optimum Nutrition ZMA</h3>
                        <p>EGP 2,000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="img/25.png" alt="">
                    <div class="caption">
                        <h3>Optimum Nutrition GS Pre-Workout – Flavored</h3>
                        <p>EGP 1,125</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class=" btn-primary">Add to cart</a>
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
                    <img src="img/26.jpg" alt="">
                    <div class="caption">
                        <h3>Natrol Omega-3</h3>
                        <p>EGP 1,070</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=13" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="img/27.jpg" alt="">
                    <div class="caption">
                        <h3>Natrol Melatonin</h3>
                        <p>EGP 865</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
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

            <div class="item">
                    <img src="img/28.png" alt="">
                    <div class="caption">
                        <h3>Natrol B-Complex</h3>
                        <p>EGP 910</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=15" name="add" value="add" class=" btn-primary">Add to cart</a>
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
                    <img src="img/29.png" alt="">
                    <div class="caption">
                        <h3>Natrol Biotin</h3>
                        <p>EGP 1,100</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=16" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="img/30.png" alt="">
                    <div class="caption">
                        <h3>Natrol Vitamin D3</h3>
                        <p>EGP 915</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=17" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="img/31.png" alt="">
                    <div class="caption">
                        <h3>Dymatize ISO 100 Protein</h3>
                        <p>EGP 3,200</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=18" name="add" value="add" class=" btn-primary">Add to cart</a>
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
                    <img src="img/32.png" alt="">
                    <div class="caption">
                        <h3>Isopure Protein – Flavored</h3>
                        <p>EGP 2,900</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="= btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=19" name="add" value="add" class=" btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
            </div>

            <div class="item">
                    <img src="img/33.png" alt="">
                    <div class="caption">
                        <h3>JNX Sports The Curse Pre-Workout</h3>
                        <p>EGP 1,395</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class=" btn-primary">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(20)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class=" btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=20" name="add" value="add" class="btn-primary">Add to cart</a>
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
    <script src="js2/index.js"></script>
</body>

</html>