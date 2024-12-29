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
    $select_query = "SELECT product_id, product_name, product_price, product_image, product_description, category_name FROM `products` INNER JOIN `categories` WHERE categories.category_id = products.category_id";
}
else {
  $select_query = "SELECT product_id, product_name, product_price, product_image, product_description, category_name FROM `products` INNER JOIN `categories` WHERE categories.category_id = products.category_id LIMIT 3";
}
  $result = mysqli_query($db_connection, $select_query);
  while($display = mysqli_fetch_array($result)){
  ?>

    <a style="text-decoration: none; color: #333;" href="./productDetail.php?productID=<?php echo $display['product_id']?>">

    <form method="POST" action="cartLogic.php">
    <input type="hidden" name="product_id" value="<?php echo $display['product_id']?>">
    <input type="hidden" name="product_name" value="<?php echo $display['product_name']?>">
    <input type="hidden" name="product_price" value="<?php echo $display['product_price']?>">
    <input type="hidden" name="product_description" value="<?php echo $display['product_description']?>">
    <input type="hidden" name="product_image" value="<?php echo $display['product_image']?>">
    <input type="hidden" name="category_name" value="<?php echo $display['category_name']?>">

    <div class="product">
        <div class="product-category">
            <span><?php echo $display['category_name']?></span>
        </div>
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
                <button type="submit" name="addToCart">
                    Add To Cart <span><i class="fas fa-plus"></i></span>
                </button>
            </div>
        </div>
    </div>
    </form>
    </a>
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