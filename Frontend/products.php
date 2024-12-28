<?php
require("../Backend/db/db_integration.php");

if(basename($_SERVER['PHP_SELF']) == "products.php"){
  require_once("./base/header.php");
?>
<?php
}
?>

<!-- Products Start -->
<?php
if((basename($_SERVER['PHP_SELF'])) == "index.php"){
  ?>
<div class="products-header">
    <p>Product Overview</p>
    <a style="text-decoration: none; color: black;" href="products.php">View All</a>
  </div>
<?php
}
?>
  <div class="products">
  <?php
  if((basename($_SERVER['PHP_SELF']) == "products.php")){
  $select_query = "SELECT * FROM `products`";
}
else {
  $select_query = "SELECT * FROM `products` LIMIT 3";
}
  $result = mysqli_query($db_connection, $select_query);
  while($display = mysqli_fetch_array($result)){
  ?>
  <div class="product">
      <div class="product-img">
        <img src="../Backend/uploads/productUploads/<?php echo $display['product_image']?>" alt="" />
      </div>

      <div class="product-text">
        
        <div class="product-details">
          <p class="product-name"><?php echo $display['product_name']?></p>
          <p>
          <?php 
                $description = $display['product_description'];
                $shortDescription = substr($description, 0, 100);
                echo $shortDescription.(strlen($description) > 50 ? "..." : "")    
                ?>
          </p>

          <div class="product-circles">
              <i class="fa-solid fa-circle" style="color: #74C0FC;"></i>
              <i class="fa-solid fa-circle" style="color: #63E6BE;"></i>
              <i class="fa-solid fa-circle" style="color: #B197FC;"></i>
          </div>
        </div>

        <div class="product-btn-price">
        <div>
          <p>$<?php echo $display['product_price']?></p>
        </div>  
        <button>
            Add To Cart <span><i class="fas fa-plus"></i></span>
          </button>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  </div>
  <!-- Products End -->

  <?php
  if(basename($_SERVER['PHP_SELF']) == "products.php"){
    require_once("./base/footer.php");
  }
  ?>