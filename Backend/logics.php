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



?>