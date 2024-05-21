<!-- this code is header navigation bar in website -->
<nav>
            <div class="navbar about-nav">
                <div class="items">
                    <div class="logo">
                        <a href="./index.html"> <img src="./images/logo.png" alt="FitnessZone"></a>
                    </div>

                    <div class="links">
                        <ul>
                           <!--If user is logged in, then header will contain these-->
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> OrderHistory</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"> SignUp</a></li>
                    <li><a href="login.php"> Login</a></li>
                    <li><a href="../about.html"> About</a></li>
                    <li><a href="product1.php"> Suplements</a></li>
                    <li><a href="product2.php"> Equipmennts</a></li>
                    <li><a href="product3.php">Clothes</a></li>
                        <?php
                    }
                    ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>



