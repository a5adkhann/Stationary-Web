<?php
require("../Backend/db/db_integration.php");

if(basename($_SERVER['PHP_SELF']) == "products.php"){
  require_once("./base/header.php");
?>
<?php
}
?>

<!-- Products Start -->
 <div class="products-header">
    <p>Featured collection</p>
    <button>View All</button>
  </div>

  <div class="products">
  <?php
  $select_query = "SELECT * FROM `products`";
  $result = mysqli_query($db_connection, $select_query);
  while($display = mysqli_fetch_array($result)){
  ?>
  <div class="product">
      <div class="product-img">
        <img src="../Backend/uploads/productUploads/<?php echo $display['product_image']?>" alt="" />
      </div>

      <div class="product-text">
        <p class="product-price">$<?php echo $display['product_price']?></p>
        <div class="product-details">
          <p class="product-name"><?php echo $display['product_name']?></p>
          <p>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
          </p>
        </div>

        <div class="add-to-cart-btn">
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