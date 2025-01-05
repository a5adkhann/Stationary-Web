<?php
require_once("./base/header.php");
?>

<div class="shopping-cart">
    <div class="cart-header">
        <h4>Product</h4>
        <h4>Price</h4>
        <h4>Quantity</h4>
        <h4>Total Price</h4>
        <h4>Action</h4>
    </div>
    <?php
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key => $value){
    ?>
        <div class="shopping-cart-item">
            <div class="product-col">
                <div class="product-img-text-cart">
                    <img src="../Backend/uploads/productUploads/<?php echo $value['product_image']?>" width="50" alt="">
                    <div class="product-detail-cart">
                        <p><?php echo $value['product_name']?></p>
                    </div>
                </div>
            </div>
            <div class="price-col">
                <p>$<?php echo $value['product_price']?></p>
            </div>
            <div class="quantity-col">
                <button id="quantity-increase">+</button>
                <span>1</span>
                <button id="quantity-decrease">-</button>
            </div>
            <div class="total-price-col">
                <p>$<?php echo $value['product_price']?></p>
            </div>
            <div class="action-col">
                <a href="">Remove</a>
            </div>
        </div>
    <?php
        }
        }
    ?>
</div>

<?php
require_once("./base/footer.php");
?>