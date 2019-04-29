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
<!DOCTYPE html>
<html lang="en">
		<head>
		  <title>update</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		</head>
		<body>

		<div class="container">
		  <h2>Update record</h2>
		  
		  <?php

				if(isset($_SESSION['update_admission_status'])){
					
					echo $_SESSION['update_admission_status'];
					
					unset($_SESSION['update_admission_status']);
				}



		  ?>
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
			<a href="database_record.php"><button type="button" class="btn btn-danger">Back</button></a>
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

</html>