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
                <img src="./logo/stationary.png" alt="">
                </a>
            </div>
            <ul> 
                <li class="active"> <span><i class="fa-solid fa-list"></i> <a href=""> Categories </a></span> <span><i id="sidebar-link-toggle" class="fa-solid fa-arrow-right"></i> </span> </li>
                <div id="dropdown-item" class="hide">
                    <p><a href="./addCategory.php">Add Category</a></p>
                    <p><a href="./allCategories.php">View Category</a></p>
                </div>
                <li> <span><i class="fa-brands fa-product-hunt"></i> <a href=""> Products </a></span> <span><i id="sidebar-link-toggle" class="fa-solid fa-arrow-right"></i> </span> </li>
                <div id="dropdown-item" class="hide">
                    <p>Add Product</p>
                    <p>View Product</p>
                </div>
                <li> <span><i class="fa-solid fa-right-to-bracket"></i> <a href=""> Login </a></span></li>
                <li> <span><i class="fa-solid fa-registered"></i> <a href=""> Register </a></span></li>
                
                <li style="position: absolute; bottom: 30px;"> <span> <i class="fa-solid fa-right-to-bracket"></i> <a href=""> Logout </a></li>
            </ul>
        </div>
        <!-- Sidebar End -->