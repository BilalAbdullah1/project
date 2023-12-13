<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
            <?php

            if (isset($_POST['edit_data_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM `producttb` WHERE pid='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
                    ?>
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="edit_id" value="<?php echo $row['pid'] ?>" >

                        <div class="form-group">
                            <label> Product Name </label>
                            <input type="text" name="edit_product" value="<?php echo $row['productname'] ?>"
                                class="form-control" placeholder="Enter Product" disabled>
                        </div>
                        <div class="form-group">
                            <label>Product Designation</label>
                            <input type="text" name="edit_designation" value="<?php echo $row['productdesignation'] ?>"
                                class="form-control" placeholder="Enter Email" disabled>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" name="edit_description" value="<?php echo $row['productdescription'] ?>"
                                class="form-control" placeholder="Enter Email"disabled >
                        </div>
                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="product_image" id="product_image"
                                value="<?php echo $row['productimage'] ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" name="comment" value="<?php echo $row['comment'] ?>"
                                class="form-control" placeholder="Comment Here"  >
                        </div>   
                            <select name="pstatus" class="form-control">
                            <?php
                            $category_query = "SELECT * FROM `statustb`";
                            $category_result = mysqli_query($connection, $category_query);
                            while ($status_row = mysqli_fetch_assoc($category_result)) {
                                echo '<option value="' . $status_row['sid'] . '">' . $status_row['status'] . '</option>';
                            }
                            ?>
                            </select>
                         

                        <div class="mt-3">
                            <a href="testingstatus.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatetesting" class="btn btn-primary"> Update </button>
                        </div>
                    </form>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>