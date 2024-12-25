
<?php
  require("./Base/header.php");
?>

  <!-- Marquee Start -->
  <marquee behavior="" direction="">
    <div class="marquee-train">
      <p>Exclusive Discounts Across All Your Favorite Brands!</p>
      <p>Shop Trendy Notebooks, Pens, and Art Supplies in Just a Click!</p>
      <p>Same-Day Delivery Available Only in Lahore – Order Today!</p>
    </div>
  </marquee>
  <!-- Marquee End -->

  <!-- Slider Start -->
  <div class="main-carousel" data-flickity='{ "autoplay": true}'>
    <div class="carousel-cell" style="background: url('./images/slider/slide1.jpg')"></div>
    <div class="carousel-cell" style="background: url('./images/slider/slide2.jpg')"></div>
    <div class="carousel-cell" style="background: url('./images/slider/slide3.jpg')"></div>
  </div>
  <!-- Slider End -->

  <!-- Categories Start -->
  <div class="categories">
    <div class="category">
      <div class="category-img">
        <img src="./images/categories/pens.png" alt="" />
      </div>
      <div class="category-text">
        <h3 class="category-title">Pencils</h3>
      </div>
    </div>
    <div class="category">
      <div class="category-img">
        <img src="./images/categories/books.png" alt="" />
      </div>
      <div class="category-text">
        <h3 class="category-title">Books</h3>
      </div>
    </div>
    <div class="category">
      <div class="category-img">
        <img src="./images/categories/spray-paint.png" alt="" />
      </div>
      <div class="category-text">
        <h3 class="category-title">Spray Paints</h3>
      </div>
    </div>
  </div>
  <!-- Categories End -->

  <!-- Products Start -->
  <div class="products-header">
    <p>Featured collection</p>
    <button>View All</button>
  </div>

  <div class="products">
    <div class="product">
      <div class="product-img">
        <img src="./images/products/product1.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="product-price">$850 -/</p>
        <div class="product-details">
          <p class="product-name">A Pencil</p>
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

    <div class="product">
      <div class="product-img">
        <img src="./images/products/product2.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="product-price">$660 -/</p>
        <div class="product-details">
          <p class="product-name">Punching Machine</p>
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

    <div class="product">
      <div class="product-img">
        <img src="./images/products/product3.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="product-price">$450 -/</p>
        <div class="product-details">
          <p class="product-name">Color Brushes</p>
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
  </div>
  <!-- Products End -->

 
<?php
  require("./Base/footer.php");
?>