<?php
require("./db/db_integration.php");

if(isset($_POST['addCategory'])){
    $cat_name = $_POST['cat_name'];
    $cat_description = $_POST['cat_description'];
    $cat_image = $_POST['cat_image'];

    $insert_query = "INSERT INTO `categories`(category_name, category_description, category_image) VALUES('$cat_name', '$cat_description', '$cat_image')";
    $result = mysqli_query($db_connection, $insert_query);
    header("location: ./addCategory.php");
}

if(isset($_POST['addProduct'])){
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_description = $_POST['prod_description'];
    $prod_image = $_POST['prod_image'];

    $insert_query = "INSERT INTO `products`(product_name, product_price, product_description, product_image) VALUES('$prod_name', '$prod_price', '$prod_description', '$prod_image')";
    $result = mysqli_query($db_connection, $insert_query);
    header("location: ./addProduct.php");
}

if(isset($_GET['deleteCategory'])){
    $category_id = $_GET['deleteCategory'];
    $delete_query = "DELETE FROM `categories` WHERE `category_id` = '$category_id'";
    $result = mysqli_query($db_connection, $delete_query);
    header("location: ./allCategories.php");
}


?>