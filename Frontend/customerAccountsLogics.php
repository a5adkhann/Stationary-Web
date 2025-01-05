<?php
session_start();
require_once("../Backend/db/db_integration.php");

if(isset($_POST['signup'])){
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];

    $insert_query = "INSERT INTO `customers`(customer_name, customer_email, customer_password) VALUES('$customer_name', '$customer_email', '$customer_password')";
    $result = mysqli_query($db_connection, $insert_query);
    header("location: signup.php");
}


if(isset($_POST['signin'])){
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];

    $select_query = "SELECT * FROM `customers` WHERE `customer_email` = '$customer_email' AND `customer_password` = '$customer_password'";
    $result = mysqli_query($db_connection, $select_query);

    $count_records = mysqli_num_rows($result);

    if($count_records > 0){
        $display = mysqli_fetch_array($result);
        $_SESSION['customer_name'] = $display['customer_name'];
        $_SESSION['customer_email'] = $display['customer_email'];
        $_SESSION['customer_password'] = $display['customer_password'];
        header("location: index.php");
    }
    else {
        echo "<script>alert('Invalid Credentials');
        location.assign('signin.php');
        </script>";
    }
}


?>