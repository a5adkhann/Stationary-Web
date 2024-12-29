<?php
require("../Backend/db/db_integration.php");
require_once("./base/header.php");
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
<a style = "text-decoration: none; border-bottom: 5px solid #21222D; color: #333;" href="javascript:void(0)" onclick="window.history.back()">Back</a>
    <?php
  $productID = $_GET['productID'];
  if((basename($_SERVER['PHP_SELF']) == "products.php")){
  $select_query = "SELECT product_name, product_price, product_image, product_description, category_name FROM `products` INNER JOIN `categories` WHERE categories.category_id = products.category_id AND product_id = $productID";
}
else {
  $select_query = "SELECT product_name, product_price, product_image, product_description, category_name FROM `products` INNER JOIN `categories` WHERE categories.category_id = products.category_id AND product_id = $productID";
}
  $result = mysqli_query($db_connection, $select_query);
  while($display = mysqli_fetch_array($result)){
  ?>
    <div class="product-detail">
        <div class="product-image-detail">
            <img src="../Backend/uploads/productUploads/<?php echo $display['product_image']?>" alt="">
        </div>
        <div class="product-info">
            <div>
              <p class="product-name"><?php echo $display['product_name']?></p>
              <p class="product-description"><?php echo $display['product_description']?></p>

              <div class="product-circles">
                    <i class="fa-solid fa-circle" style="color: #74C0FC;"></i>
                    <i class="fa-solid fa-circle" style="color: #63E6BE;"></i>
                    <i class="fa-solid fa-circle" style="color: #B197FC;"></i>
                </div>
            </div>

            <div class="product-price-detail">
                <div>
                    <p class="product-price">$<?php echo $display['product_price']?></p>
                </div>
                <div>
                  <p class="product-availability">In Stock</p>
                </div>
            </div>

            <button class="add-to-cartBtnDetailPage">
                    Add To Cart <span><i class="fas fa-plus"></i></span>
                </button>
        </div>
    </div>
    <?php
  }
  ?>
</div>
<!-- Products End -->

<?php
    require_once("./base/footer.php");
  ?>