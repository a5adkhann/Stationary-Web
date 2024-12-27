<?php
require("./base/header.php");
?>

<div class="main-section">
    <h1>All Categories</h1>
    <table class="table" cellspacing="0" width="100%" height="100px">
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
            <td><?php echo $display['category_description']?></td>
            <td><?php echo $display['category_image']?></td>
            <td>
                <a href="">Update</a>
                <a href="./logics.php?deleteCategory=<?php echo $display['category_id']?>">Delete</a>
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