<?php
require("./base/header.php");
?>

<div class="main-section">
    <div class="dataDisplay-header">
        <h1>All Categories</h1>
        <a href="./addCategory.php"><span><i class="fa-regular fa-square-plus"></i></span>ADD</a>
    </div>
    <table class="table" width="100%" cellpadding="10">
        <tr>
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
                <a class="actionBtn" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="actionBtn" href="./logics.php?deleteCategory=<?php echo $display['category_id']?>"><i class="fa-solid fa-trash"></i></a>
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