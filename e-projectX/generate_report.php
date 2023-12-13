<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Report</h1>

    <?php
    $query = "SELECT p.*, c.catname , s.status FROM producttb p LEFT JOIN categorytb c ON p.category_id = c.cid LEFT JOIN statustb s ON p.pstatus = s.sid";
    $query_result = mysqli_query($connection, $query);
    if (mysqli_num_rows($query_result) > 0) {
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Productid</th>
                    <th>Product</th>
                    <th>Designation </th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Comment</th>
                    <th>Upload Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($query_result)) {
                ?>
                    <tr>
                        <td><?php echo $row['pid']; ?></td>
                        <td><?php echo $row['productname']; ?></td>
                        <td><?php echo $row['productdesignation']; ?></td>
                        <td><?php echo $row['productdescription']; ?></td>
                        <td><?php echo $row['catname']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['comment']; ?></td>
                        <td><?php echo '<img src="upload/' . $row['productimage'] . '" width="100px" height="100px" alt="images">' ?></td>
                 
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "No Record Found";
    }
    ?>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
