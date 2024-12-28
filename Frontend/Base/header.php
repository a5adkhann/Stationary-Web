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
    <nav class="navbar desktop">
      <div class="navbar-logo">
        <a href="index.php">
          <img src="./images/stationary.png" alt="" />
        </a>
      </div>
      <div>
          <ul class="navbar-items">
              <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '')?>"><a href="./index.php">Home</a></li>
              <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'categories.php' ? 'active' : '')?>"><a href="./categories.php">Categories</a></li>
              <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '')?>"><a href="./products.php">Products</a></li>
              <li class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '')?>"><a href="">Contact</a></li>
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
          <li><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Contact</a></li>
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
      <h3>Cart Items</h3>
      <p>No Items Yet</p>
    </div>

    <div>
      <span id="close-icon"><i class="fa-solid fa-xmark"></i></span>
    </div>

  </div>
  <!-- Cart End-->
