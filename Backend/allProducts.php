<?php
require("./base/header.php");
?>

<div class="main-section">
    <div class="dataDisplay-header">
        <h1>All Products</h1>
        <a href="./addProduct.php">ADD</a>
    </div>
    <table class="table" width="100%" cellpadding="10">
        <tr>
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
                <a style="color: #12CEC8" class="actionBtn" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="actionBtn" href="./logics.php?deleteProduct=<?php echo $display['product_id']?>"><i style="color: #FC0037" class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php
require("./base/footer.php");
?>