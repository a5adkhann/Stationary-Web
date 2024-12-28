<?php
require("./db/db_integration.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend - Stationary Web</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/894005d3c1.js" crossorigin="anonymous"></script>

    <!-- Chart JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>
<body>
    <div class="container">
        <!-- Sidebar Start -->
        <div class="sidebar">
            <div class="logo">
                <a href="index.php">
                <img style="filter: invert(1); display: flex; margin: auto;" src="./logo/stationary.png" width="200" alt="">
                </a>
            </div>
            <ul> 
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'addCategory.php' || basename($_SERVER['PHP_SELF']) == 'addCategory.php' ? 'active' : '')?>"> <span><i class="fa-solid fa-list"></i> <a href=""> Categories </a></span> <span><i class="sidebar-link-toggle fa-solid fa-arrow-right"></i> </span> </li>
                <div class="dropdown-item hide">
                    <p><a href="./addCategory.php">Add Category</a></p>
                    <p><a href="./allCategories.php">View Category</a></p>
                </div>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'addProduct.php' || basename($_SERVER['PHP_SELF']) == 'allProducts.php' ? 'active' : '')?>"> <span><i style="color: #FFF;" class="fa-brands fa-product-hunt"></i> <a style="color: #FFF;" href=""> Products </a></span> <span><i  style="color: #FFF;" class="sidebar-link-toggle fa-solid fa-arrow-right"></i> </span> </li>
                <div class="dropdown-item hide">
                    <p><a href="./addProduct.php">Add Product</a></p>
                    <p><a href="./allProducts.php">View Product</a></p>
                </div>
                <li> <span><i style="color: #FFF;" class="fa-solid fa-registered"></i> <a style="color: #FFF;" href="./logout.php"> Add User </a></span></li>
                
                <li style="position: absolute; bottom: 10px;"> <span><i style="color: #FC003C;" class="fa-solid fa-right-to-bracket"></i> <a style="color: #FC003C;" href="./logout.php"> Logout </a></span></li>
            </ul>
        </div>
        <!-- Sidebar End -->