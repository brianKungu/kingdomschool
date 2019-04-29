
<?php
	
    session_start();
require('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM admission WHERE id='$id'";
    $select_query=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($select_query)){
        $parentsname=$row['parentsname'];
        $phonenumber=$row['phonenumber'];
        $studentsname=$row['studentsname'];
		$studentsgrade=$row['studentsgrade'];
		$formerschool=$row['formerschool'];
		$homeaddress=$row['homeaddress'];
        $id=$row['id'];
		
    }
}

?>
<style>
	input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.error{
color: red;

}

.success{
	color: green;
}
</style>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
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
      
        
            
          </li>
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Richard V.Welsh !</span>
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
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item">
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
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="database_record1.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Admission</span>
            </a>
          </li>
           
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
	  <form class="form-horizontal" action="" method="POST">
		  
			<div class="form-group">
			  <label class="control-label col-sm-2" for="email">Id</label>
			  <div class="col-sm-10">
				<input type="text" class="form-control"   name="id" value="<?php echo $id;?>" readOnly>
			  </div>
			</div>

			<div class="form-group">
			  <label class="control-label col-sm-2" for="email">Parents Name:</label>
			  <div class="col-sm-10">
				<input type="text" class="form-control"   name="parentsname" value="<?php echo $parentsname;?>">
			  </div>
			</div>

			<div class="form-group">
			  <label class="control-label col-sm-2" for="pwd">phonenumber:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" id="pwd"  name="phonenumber" value="<?php echo $phonenumber;?>">
			  </div>
			</div>
			 <div class="form-group">
			  <label class="control-label col-sm-2" for="email">students name:</label>
			  <div class="col-sm-10">
				<input type="text" rows="4" cols="50" autofocus name="studentsname" value="<?php echo $studentsname;?>">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="email">students grade:</label>
			  <div class="col-sm-10">
				<input type="text" rows="4" cols="50" autofocus name="studentsgrade" value="<?php echo $studentsgrade;?>">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="email">home address:</label>
			  <div class="col-sm-10">
				<input type="text" rows="4" cols="50" autofocus name="homeaddress" value="<?php echo $homeaddress;?>">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="email">formerschool:</label>
			  <div class="col-sm-10">
				<input type="text" rows="4" cols="50" autofocus name="formerschool" value="<?php echo $formerschool;?>">
			  </div>
			</div>

			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="update" class="btn btn-success" value="Update">
			  </div>
			</div>
			<a href="database_record1.php"><button type="button" class="btn btn-danger">Back</button></a>
		  </form>
		</div>
		</body>

		<?php
		  if(isset($_POST['update'])){
			  $parentsname = isset($_POST['parentsname']) ? $_POST['parentsname'] : '' ;
			  $phonenumber = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '' ;
			  $studentsname = isset($_POST['studentsname']) ? $_POST['studentsname'] : '' ;
			  $studentsgrade = isset($_POST['studentsgrade'])? $_POST['studentsgrade']:'';
			  $formerschool = isset($_POST['formerschool'])? $_POST['formerschool']:'';
			  $homeddress=isset($_POST['homeaddress'])? $_POST['homeaddress']:'';
			  $id = isset($_POST['id'])?$_POST['id']:'';
			  			  
			 $stmt = $conn->prepare("update admission set parentsname = ?,phonenumber = ?,studentsname=?,studentsgrade=?,formerschool=?,homeaddress=? where id = ?");
			
			$stmt->bind_param("ssssssi", $parentsname, $phonenumber,$studentsname,$studentsgrade,$formerschool,$homeaddress,$id);	

			$stmt->execute();
			
			  $_SESSION['update_admission_status'] = '<p class="error">Admission Update Failed</p>';
			  
			 if ($stmt->affected_rows){
												
				$_SESSION['update_admission_status'] = '<p class="success">Admission Update successfull</p>';
				}
											
				$stmt->close();
								
				header('Location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
					die;
		  }
		  
		?>

      
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