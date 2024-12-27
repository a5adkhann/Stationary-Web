
<?php
require("../Backend/db/db_integration.php");

if (basename($_SERVER['PHP_SELF']) == 'categories.php') {
  require("./Base/header.php");
}

?>


<!-- Categories Start -->
 <div class="categories">
 <?php
  $select_query = "SELECT * FROM `categories`";
  $result = mysqli_query($db_connection, $select_query);
  while($display = mysqli_fetch_array($result)){
 ?>
 <div class="category">
      <div class="category-img">
        <img src="../Backend/uploads/<?php echo $display['category_image']?>" width="250" alt="" />
      </div>
      <div class="category-text">
        <h3 class="category-title"><?php echo $display['category_name']?></h3>
      </div>
 </div>
 <?php
 }
 ?>
  </div>
  <!-- Categories End -->

  <?php
  if (basename($_SERVER['PHP_SELF']) == 'categories.php') {
    require("./Base/footer.php");
  }
  ?>