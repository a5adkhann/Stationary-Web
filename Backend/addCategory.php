<?php
require("./base/header.php");
?>

<div class="main-section">
<div class="dataInsertion-header">
<h1>Add Category</h1>
<a href="javascript:void(0)" onclick="window.history.back()">Back</a>
</div>

<form method="POST" action="logics.php" enctype="multipart/form-data">
<div id="form-divider">
    <label for="">Category Name:</label>
    <input type="text" id="catField" name="cat_name">
    </div>

    <div id="form-divider">
    <label for="">Category Description</label>
    <input type="text" id="catField" name="cat_description">
    </div>

    <div id="form-divider">
    <label for="">Category Image:</label>
    <input type="file" id="catField" name="cat_image">
    </div>

    <div id="form-divider">
    <input type="submit" id="catSubmitBtn" value="ADD" name="addCategory">
    </div>
</form>
</div>

<?php
require("./base/footer.php");
?>