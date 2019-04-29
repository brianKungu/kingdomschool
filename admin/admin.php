<?php
include('connect.php');

if(!isset($_SESSION['user_id'])){

	 header("Location: http://localhost/kingdom/admin/login.php");
}
include('process_login.php');
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin-ContactInfo</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <span class="profile-text">Hello, Admin!</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2" href="allusers.php">
                View Accounts
              </a>
              <a class="dropdown-item" href="database_record1.php">
                View Admissions
              </a>
              <a class="dropdown-item" href="admin.php">
                Check Messages
              </a>
              <a class="dropdown-item" href="logout.php">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
             
            </div>
          </li>
          
         
          
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Contact info.</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="database_record1.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Admission info</span>
            </a>
          </li>
      
          
          </ul>
      </nav>
      <!-- partial -->
        <div class="container">
       <div class="row">
           <div class="col-sm-4"></div>
           <div class="col-sm-4"></div>
           <div class="col-sm-4">
          
           </div>
       </div>
       <div class="table-responsive">
        <center> <h2>Contact records</h2></center>
                     
              <a href="logout.php"><button type="button" class="btn btn-danger">logout</button> </a>
			 
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <td>id</td>
                       <td>name</td>
                       <td>Phone numbers</td>
                       <td>Messages</td>
                     
                   </tr>
               </thead>
               <tbody>
                   <?php
                      $select="SELECT * FROM contact";
                      $select_query=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_array($select_query)){ 
                   ?>
                   <tr>
                       <td><?php echo $row['id']?></td>
                       <td><?php echo $row['name']?></td>
                       <td><?php echo $row['phonenumber']?></td>
                       <td><?php echo $row['message']?></td>
                       
                       <?php echo "<td>  
                       <a href='view.php?id=".$row['id']."'class='btn btn-success'>View</a>
                       <a  href='delete.php?id=". $row['id'] ."' class='btn btn-danger'>Delete</a>  
                       <a href='update.php?id=".$row['id']."' class='btn btn-warning'>Update</a>
                        </td>";?>
                   </tr>
                    <?php
                      }
                    ?>
               </tbody>
           </div>
       </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>