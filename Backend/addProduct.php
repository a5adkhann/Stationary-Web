<?php
require("./base/header.php");
?>

<div class="main-section">
<h1>Add Product</h1>
<form method="POST" action="logics.php">
<div id="form-divider">
    <label for="">Product Name:</label>
    <input type="text" id="prodField" name="prod_name">
    </div>

    <div id="form-divider">
    <label for="">Product Price:</label>
    <input type="text" id="prodField" name="prod_price">
    </div>

    <div id="form-divider">
    <label for="">Product Description</label>
    <input type="text" id="prodField" name="prod_description">
    </div>

    <div id="form-divider">
    <label for="">Product Image:</label>
    <input type="file" id="prodField" name="prod_image">
    </div>

    <div id="form-divider">
    <input type="submit" id="catSubmitBtn" value="ADD" name="addProduct">
    </div>
</form>
</div>

<?php
require("./base/footer.php");
?>