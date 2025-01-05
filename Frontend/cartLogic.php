<?php
session_start();
if(isset($_POST['addToCart'])){

    if(isset($_SESSION['cart'])){
        $productId = array_column($_SESSION['cart'], "product_id");
        if(in_array($_POST['product_id'], $productId)){
            echo "<script>alert('Product already Inserted!');
            location.assign('index.php');
            </script>";
        }
        else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array("product_id" => $_POST['product_id'], "product_name" => $_POST['product_name'], "product_price" => $_POST['product_price'], "product_description" => $_POST['product_description'], "product_image" => $_POST['product_image']);
            echo "<script>
            alert('Added to Cart');
            location.assign('index.php');
            </script>";
        }
    }
    else {
    $_SESSION['cart'][0] = array("product_id" => $_POST['product_id'], "product_name" => $_POST['product_name'], "product_price" => $_POST['product_price'], "product_description" => $_POST['product_description'], "product_image" => $_POST['product_image']);
    echo "<script>
    alert('Added to Cart');
    location.assign('index.php');
    </script>";
}
}

if(isset($_POST['checkout'])){
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key => $value){
            
        }
    }
}




?>