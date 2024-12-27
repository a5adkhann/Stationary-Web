
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
  <?php
  require("./categories.php");
  ?>
  <!-- Categories End -->

  <!-- Products Start -->
 <?php
  require("./products.php");
  ?>
  <!-- Products End -->

 
<?php
  require("./Base/footer.php");
?>