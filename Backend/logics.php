<?php
require("./db/db_integration.php");

if(isset($_POST['addCategory'])){
    $cat_name = $_POST['cat_name'];
    $cat_description = $_POST['cat_description'];

    $cat_image = $_FILES['cat_image']['name'];
    $tmp_cat_image = $_FILES['cat_image']['tmp_name'];
    $extension = pathinfo($cat_image, PATHINFO_EXTENSION);
    $destination = "./uploads/".$cat_image;

    if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
        if(move_uploaded_file($tmp_cat_image, $destination)){
    $insert_query = "INSERT INTO `categories`(category_name, category_description, category_image) VALUES('$cat_name', '$cat_description', '$cat_image')";
    $result = mysqli_query($db_connection, $insert_query);
    header("location: ./addCategory.php");
        }
}
}

if(isset($_POST['addProduct'])){
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_description = $_POST['prod_description'];

    $prod_image = $_FILES['prod_image']['name'];
    $tmp_prod_image = $_FILES['prod_image']['tmp_name'];
    $extension = pathinfo($prod_image, PATHINFO_EXTENSION);
    $destination = "./uploads/".$prod_image;

    if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
        if(move_uploaded_file($tmp_prod_image, $destination)){
    $insert_query = "INSERT INTO `products`(product_name, product_price, product_description, product_image) VALUES('$prod_name', '$prod_price', '$prod_description', '$prod_image')";
    $result = mysqli_query($db_connection, $insert_query);
    header("location: ./addProduct.php");
}
}
}

if(isset($_GET['deleteCategory'])){
    $category_id = $_GET['deleteCategory'];
    $delete_query = "DELETE FROM `categories` WHERE `category_id` = '$category_id'";
    $result = mysqli_query($db_connection, $delete_query);
    header("location: ./allCategories.php");
}

if(isset($_GET['deleteProduct'])){
    $product_id = $_GET['deleteProduct'];
    $delete_query = "DELETE FROM `products` WHERE `product_id` = '$product_id'";
    $result = mysqli_query($db_connection, $delete_query);
    header("location: ./allProducts.php");
}


?>