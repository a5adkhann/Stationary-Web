<?php
require("./base/header.php");
?>

<div class="main-section">
<div class="dataInsertion-header">
<h1>Add Product</h1>
<a href="javascript:void(0)" onclick="window.history.back()">Back</a>
</div>

<form method="POST" action="logics.php" enctype="multipart/form-data">
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
    <label for="">Product Category:</label>
    <select id="prodField" name="prod_category">
        <option value="">---</option>
        <?php
        $select_query = "SELECT * FROM `categories`";
        $result = mysqli_query($db_connection, $select_query);
        while($display = mysqli_fetch_array($result)){
        ?>
            <option value="<?php echo $display['category_id']?>"><?php echo $display['category_name']?></option>
        <?php
}
?>
    </select>
    </div>

    <div id="form-divider">
    <input type="submit" id="catSubmitBtn" value="ADD" name="addProduct">
    </div>
</form>
</div>

<?php
require("./base/footer.php");
?>