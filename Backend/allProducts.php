<?php
require("./base/header.php");

if(isset($_POST['updateProduct'])){
    $updateProduct = $_GET['updateProduct'];
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_description = $_POST['prod_description'];
    $prod_category = $_POST['prod_category'];

    $prod_image = $_FILES['prod_image']['name'];
    $tmp_prod_image = $_FILES['prod_image']['tmp_name'];
    $extension = pathinfo($prod_image, PATHINFO_EXTENSION);
    $destination = "./uploads/productUploads/".$prod_image;

    if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
        if(move_uploaded_file($tmp_prod_image, $destination)){
    $update_query = "UPDATE `products` SET `product_name` = '$prod_name', `product_description` = '$prod_description', `product_image` = '$prod_image', `product_price` = '$prod_price', `category_id` = '$prod_category' WHERE `product_id` = '$updateProduct'";
    $result = mysqli_query($db_connection, $update_query);
    header("location: ./allProducts.php");
}
}
}

?>

<div class="main-section">
    <div class="dataDisplay-header">
        <h1>All Products</h1>
        <a href="./addProduct.php">ADD</a>
    </div>
    <table class="table" width="100%" cellpadding="10">
        <tr>
            <th>
                <input type="checkbox" disabled>
            </th>
            <th>S No</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Detail</th>
            <th>Product Image</th>
            <th><a style="color: #FFF; text-decoration: none;" href="./allCategories.php">Product Category</a></th>
            <th>Action</th>
        </tr>
        <?php
        $sno = 1;
        $select_query = "SELECT `product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `category_name` FROM `products` INNER JOIN `categories` WHERE categories.category_id = products.category_id";
        $result = mysqli_query($db_connection, $select_query);
        while($display = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td>
                <input style="cursor: pointer;" type="checkbox"
                    onchange="updateProduct(this, <?php echo $display['product_id']; ?>)">
            </td>
            <td><?php echo $sno++?></td>
            <td><?php echo $display['product_name']?></td>
            <td>$<?php echo $display['product_price']?></td>
            <td>
                <?php 
                $description = $display['product_description'];
                $shortDescription = substr($description, 0, 50);
                echo $shortDescription.(strlen($description) > 50 ? "..." : "")    
                ?>
            </td>
            <td><img src="./uploads/productUploads/<?php echo $display['product_image']?>" width="70" alt=""></td>
            <td><?php echo $display['category_name']?></td>
            <td>
                <a style="color: #12CEC8" class="actionBtn js-open" href=""><i
                        class="fa-regular fa-pen-to-square"></i></a>
                <a class="actionBtn" href="./logics.php?deleteProduct=<?php echo $display['product_id']?>"><i
                        style="color: #FC0037" class="fa-solid fa-trash"></i></a>
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
                <input type="submit" id="prodUpdateBtn" value="Update" name="updateProduct">
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