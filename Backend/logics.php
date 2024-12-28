<?php
session_start();
require("./db/db_integration.php");

if(isset($_POST['addCategory'])){
    $cat_name = $_POST['cat_name'];
    $cat_description = $_POST['cat_description'];

    $cat_image = $_FILES['cat_image']['name'];
    $tmp_cat_image = $_FILES['cat_image']['tmp_name'];
    $extension = pathinfo($cat_image, PATHINFO_EXTENSION);
    $destination = "./uploads/categoryUploads/".$cat_image;

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
    $prod_category = $_POST['prod_category'];

    $prod_image = $_FILES['prod_image']['name'];
    $tmp_prod_image = $_FILES['prod_image']['tmp_name'];
    $extension = pathinfo($prod_image, PATHINFO_EXTENSION);
    $destination = "./uploads/productUploads/".$prod_image;

    if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
        if(move_uploaded_file($tmp_prod_image, $destination)){
    $insert_query = "INSERT INTO `products`(product_name, product_price, product_description, product_image, category_id) VALUES('$prod_name', '$prod_price', '$prod_description', '$prod_image', '$prod_category')";
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

if(isset($_POST['signup'])){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_cpassword = $_POST['user_cpassword'];

    if($user_password == $user_cpassword){
    $insert_query = "INSERT INTO `users`(user_name, user_email, user_password, user_cpassword) VALUES('$user_name','$user_email', '$user_password', '$user_cpassword')";
    $result = mysqli_query($db_connection, $insert_query);
    header("location: signup.php");
}
else {
    echo "<script>alert('Password does not match');
    location.assign('signup.php');
    </script>";
}
}



if(isset($_POST['signin'])){
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $select_query = "SELECT * FROM `users` WHERE `user_email` = '$user_email' AND `user_password` = '$user_password'";
    $result = mysqli_query($db_connection, $select_query);

    $count_records = mysqli_num_rows($result);

    if($count_records > 0){
        $display = mysqli_fetch_array($result);
        $_SESSION['user_email'] = $display['user_email'];
        $_SESSION['user_password'] = $display['user_password'];
        header("location: index.php");
    }
    else {
        echo "<script>alert('Invalid Credentials');
        location.assign('signin.php');
        </script>";
    }
}







?>