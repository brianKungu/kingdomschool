<?php require('connect.php'); ?>


<!DOCTYPE html>

<html>
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

input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: cadetblue;
}
h3{
  text-align: center;
}


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 40px;
  width: 500px;
margin: auto;

}
</style>



<body>
<div>

<?php if (isset($_POST['submit'])){
	
	$username = isset($_POST['username']) ? $_POST['username'] : '' ;
	
	$password = sha1(isset($_POST['password']) ? $_POST['password'] : '') ;

	
	$stmt = $conn->prepare("select id from admin where username = ? and password = ? ");
	
	$stmt->bind_param("ss", $username, $password);
	
	$stmt->execute();
	
	$result = $stmt->get_result();
	
	if($result->num_rows ){
		
		$row = $result->fetch_array();
		
		$_SESSION['user_id'] = $row['id'];
		
		 header("Location: http://localhost/kingdom/admin/admin.php");
	}
	
	$_SESSION['login'] = 'Invalid username or password';

}

?>

<h3><i>Administrator</i></h3>
	<?php if ( isset($_SESSION['login'])) {
		
		echo $_SESSION['login'];
		
		unset($_SESSION['login']);	
		
	} 
	
	?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit=" return validate()">
    <label for="fname">Username</label>
    <input type="text" id="firstName" name="username"  placeholder="Your name.." required>
	
        <label for="password">Password</label>
    <input type="password" id="password"  name="password" required>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
