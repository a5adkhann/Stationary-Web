<?php
session_start();
require("./base/header.php");

if(!isset($_SESSION['user_email'])){
    header("location:signin.php");
}

?>
        <!-- Main Section Start -->
        <div class="main-section">

        <div class="main-head">
            <input type="text" id="searchField" placeholder="Search here...">
            
            <span>
            <i class="fa-regular fa-bell"></i>
            <i class="fa-regular fa-user"></i>
            </span>
        </div>
            <h1>Welcome to Stationary Web Backend</h1>
            <canvas id="myChart" style="width:75%;max-width:600px"></canvas>
        </div>
        <!-- Main Section End -->
        <?php
require("./base/footer.php");
?>