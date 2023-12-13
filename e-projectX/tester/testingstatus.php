<?php

include('../security.php');
include('includes/header.php');
include('includes/navbar.php');

?>


    <div class="card-body">
      <?php
      if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h2>' . $_SESSION['success'] . '</h2>';
        unset($_SESSION['success']);
      }
      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h2 class= "bg-info">' . $_SESSION['status'] . '</h2>';
        unset($_SESSION['status']);
      }
      ?>

      <div class="card-body">
        <form action="" method="GET" id="searchForm" class="mb-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search by product name">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </div>
        </form>
      </div>

      <?php
      $query = "SELECT p.*, c.catname , s.status  FROM producttb p LEFT JOIN categorytb c ON p.category_id = c.cid LEFT JOIN statustb s ON p.pstatus = s.sid";
      if (isset($_GET['search'])) {
        $filter = mysqli_real_escape_string($connection, $_GET['search']);
        $query .= " WHERE CONCAT(productname, productdesignation, productdescription, catname) LIKE '%$filter%'";
      }

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
              <th>Upload Image</th>
              <th>Status</th>
              <th>Comment</th>
              <th>Test </th>
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
                <td><?php echo '<img src="../upload/' . $row['productimage'] . '" width="100px" height="100px" alt="images">' ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['comment']; ?></td>

                <td>
                  <form action="testingcheck.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['pid']; ?>">
                    <button type="submit" name="edit_data_btn" class="btn btn-success"> Test</button>
                  </form>
                </td>
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
  </div>
</div>

</div>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>