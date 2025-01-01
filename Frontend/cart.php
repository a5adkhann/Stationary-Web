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
    <div class="shopping-cart-item">
        <div class="product-col">
            <div class="product-img-text-cart">
                <img src="../Backend/uploads/productUploads/product1.jpg" width="50" alt="">
                <div class="product-detail-cart">
                <p>category name</p>
                <p>Product name</p>
            </div>
            </div>
        </div>
        <div class="price-col">
            <p>$25.00 /-</p>
        </div>
        <div class="quantity-col">
            <button id="quantity-increase">+</button>
                <span>1</span>
            <button id="quantity-decrease">-</button>
        </div>
        <div class="total-price-col">
            <p>$200 /-</p>
        </div>
        <div class="action-col">
            <a href="">Remove</a>
        </div>
    </div>

    <div class="shopping-cart-item">
        <div class="product-col">
            <div class="product-img-text-cart">
                <img src="../Backend/uploads/productUploads/product1.jpg" width="50" alt="">
                <div class="product-detail-cart">
                <p>category name</p>
                <p>Product name</p>
            </div>
            </div>
        </div>
        <div class="price-col">
            <p>$25.00 /-</p>
        </div>
        <div class="quantity-col">
            <button id="quantity-increase">+</button>
                <span>1</span>
            <button id="quantity-decrease">-</button>
        </div>
        <div class="total-price-col">
            <p>$200 /-</p>
        </div>
        <div class="action-col">
            <a href="">Remove</a>
        </div>
    </div>
</div>



<?php
require_once("./base/footer.php");
?>