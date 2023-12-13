<?php
 include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>-->

  <!-- Content Row -->
  <div class="row">

<!--TOTAL USER-->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT COUNT(regid) as totalAdmin FROM registertb";
                $query_run = mysqli_query($connection, $query);
                $result = mysqli_fetch_assoc($query_run);
                $totalAdmin = $result['totalAdmin'];
                echo '<h4> Total User: ' . $totalAdmin . '</h4>';
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--TOTAL Category-->

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Category </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT COUNT(cid) as totalcategory FROM categorytb";
                $query_run = mysqli_query($connection, $query);
                $result = mysqli_fetch_assoc($query_run);
                $totalAdmin = $result['totalcategory'];
                echo '<h4>  total category: ' . $totalAdmin . '</h4>';
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--PASS STATUS-->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PRODUCT STATUS</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT COUNT(pid) as totalprodcut FROM producttb WHERE pstatus = 1 ";
                $query_run = mysqli_query($connection, $query);
                $result = mysqli_fetch_assoc($query_run);
                $totalAdmin = $result['totalprodcut'];
                echo '<h4>  PASS : ' . $totalAdmin . '</h4>';
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--FAIL STATUS-->

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PRODUCT STATUS </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT COUNT(pid) as totalprodcut FROM producttb WHERE pstatus = 2 ";
                $query_run = mysqli_query($connection, $query);
                $result = mysqli_fetch_assoc($query_run);
                $totalAdmin = $result['totalprodcut'];
                echo '<h4>  FAIL : ' . $totalAdmin . '</h4>';
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Content Row -->

  <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>