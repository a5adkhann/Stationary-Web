
<?php
require_once("./customerAccountsLogics.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stationary Web</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./images/stationary.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/894005d3c1.js" crossorigin="anonymous"></script>

    <!-- Flickity CSS Link -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css" />
</head>

<body>
    <!-- Navbar Start -->
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="./images/stationary.png" alt="" />
                </a>
            </div>
            <div>
                <ul class="navbar-items">
                    <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '')?>"><a
                            href="./index.php">Home</a></li>
                    <li
                        class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'categories.php' ? 'active' : '')?>">
                        <a href="./categories.php">Categories</a>
                    </li>
                    <li
                        class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '')?>">
                        <a href="./products.php">Products</a>
                    </li>
                    <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cart.php' ? 'active' : '')?>">
                        <a href="./cart.php">Cart</a>
                    </li>

                    <?php
                    if(isset($_SESSION['customer_email'])){
                    ?>
                    <li class="nav-link">
                        <a href="./logout.php">Logout</a>
                    </li>
                <?php
                }
                else {
                ?>
                <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'signin.php' ? 'active' : '')?>">
                        <a href="./signin.php">Sign in</a>
                    </li>
<?php
}
?>
                </ul>
            </div>

            <div class="nav-icons">
                <span id="cart-icon"><i class="fas fa-shopping-cart"></i></span>
                <span id="hamburger-icon"><i class="fa-solid fa-bars"></i></span>
            </div>
        </nav>


        <nav id="navbar-mobile-view" class="hide">
            <div class="navbar-mobile-logo">
                <img src="./images/stationary.png" alt="">
            </div>

            <div>
                <ul class="navbar-mobile-items">
                    <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '')?>"><a
                            href="./index.php">Home</a></li>
                    <li
                        class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'categories.php' ? 'active' : '')?>">
                        <a href="./categories.php">Categories</a>
                    </li>
                    <li
                        class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '')?>">
                        <a href="./products.php">Products</a>
                    </li>
                    <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '')?>">
                        <a href="">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="nav-mobile-icons">
                <span><i class="fas fa-shopping-cart"></i></span>
            </div>
        </nav>

    </header>
    <!-- Navbar End -->

    <!-- Cart Start-->
    <div id="cart">
        <div>
            <h3>Your Shopping!</h3>
            <div class="allCartItems">
              <table class="cart-table">
                <tr>
                  <th>Product Image</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                </tr>
              <?php
              session_start();
              if(isset($_SESSION['cart'])){
              foreach($_SESSION['cart'] as $key => $value) {
              ?>
                <tr style="border-bottom: 1px solid white;">
                  <td><img src="../Backend/uploads/productUploads/<?php echo $value['product_image']?>" alt="" width="30"></td>
                  <td><?php echo $value['product_name']?></td>
                  <td>$<?php echo $value['product_price']?></td>
                </tr>
                <?php
                }
                }
                ?>
                </table>

                <form class="cart-form" method="POST" action="./cartLogic.php">
                    <button type="submit" name="checkout">Checkout</button>
                    <button><a class="viewCartBtn" href="./cart.php">View Cart</a></button>
                </form>

            </div>
           
        </div>

        <div>
            <span id="close-icon"><i class="fa-solid fa-xmark"></i></span>
        </div>

    </div>
    <!-- Cart End-->