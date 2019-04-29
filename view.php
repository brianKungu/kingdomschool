<?php
	include('connect.php');
	if(ISSet($_GET['id'])){
		$id=$_GET['id'];
		$query="SELECT * FROM contact WHERE id='$id'";
		$select_query=mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($select_query)){
			$name=$row['name'];
        $phone=$row['phonenumber'];
        $message=$row['message'];
			$id=$row['id'];
			
		}
		
		
	}
?>
<html>
	<head></head>
<body>
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
  <h2>view record</h2>
  <form class="form-horizontal" action="" method="POST">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"   name="id" value="<?php echo $id;?>" readOnly>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"   name="name" value="<?php echo $name;?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">phonenumber:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd"  name="phone" value="<?php echo $phone;?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">message:</label>
      <div class="col-sm-10">
        <input type="text" rows="4" cols="50" autofocus name="message" value="<?php echo $message;?>">
      </div>
    </div>
</body>
</html>