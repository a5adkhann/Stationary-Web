<?php
require("./base/header.php");
if(isset($_POST['updateCategory'])){
    $updateCategory = $_GET['updateCategory'];
    $cat_name = $_POST['cat_name'];
    $cat_description = $_POST['cat_description'];

    $cat_image = $_FILES['cat_image']['name'];
    $tmp_cat_image = $_FILES['cat_image']['tmp_name'];
    $extension = pathinfo($cat_image, PATHINFO_EXTENSION);
    $destination = "./uploads/categoryUploads/".$cat_image;

    if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
        if(move_uploaded_file($tmp_cat_image, $destination)){
    $update_query = "UPDATE `categories` SET `category_name` = '$cat_name', `category_description` = '$cat_description', `category_image` = '$cat_image' WHERE `category_id` = '$updateCategory'";
    $result = mysqli_query($db_connection, $update_query);
    header("location: ./allCategories.php");
        }
}
}
?>

<div class="main-section">
    <div class="dataDisplay-header">
        <h1>All Categories</h1>
        <a href="./addCategory.php">ADD</a>
    </div>
    <table class="table" width="100%" cellpadding="10">
        <tr>
            <th>
                <input type="checkbox" disabled>
            </th>
            <th>S No</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Category Image</th>
            <th>Action</th>
        </tr>
        <?php
        $sno = 1;
        $select_query = "SELECT * FROM `categories`";
        $result = mysqli_query($db_connection, $select_query);
        while($display = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td>
                <input style="cursor: pointer;" type="checkbox"
                    onchange="updateCategory(this, <?php echo $display['category_id']; ?>)">
            </td>
            <td><?php echo $sno++?></td>
            <td><?php echo $display['category_name']?></td>
            <td>
                <?php 
                $description = $display['category_description'];
                $shortDescription = substr($description, 0, 50);
                echo $shortDescription.(strlen($description) > 50 ? "..." : "")    
                ?>
            </td>
            <td><img src="./uploads/categoryUploads/<?php echo $display['category_image']?>" width="70" alt=""></td>
            <td>

                <a style="color: #12CEC8" class="actionBtn js-open" href=""><i
                        class="fa-regular fa-pen-to-square"></i></a>
                <a style="color: #FC0037" class="actionBtn"
                    href="./logics.php?deleteCategory=<?php echo $display['category_id']?>"><i
                        class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

    <div id="model-background"></div>
        <div id="model-box">
            <form method="POST" enctype="multipart/form-data">
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
                    <input type="submit" id="catUpdateBtn" value="Update" name="updateCategory">
                </div>
            </form>
            <div class="text-right">
                <button type="button" class="button button-close js-close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>

</div>

<?php
require("./base/footer.php");
?>