<?php
$conn=mysqli_connect("localhost","root","","kingdomhigh");
$db=mysqli_select_db($conn,"kingdomhigh");

$name=$_POST['name'];
$phonenumber=$_POST['phone'];
$message=$_POST['message'];
$query="INSERT INTO contact(id,name,phonenumber,message)VALUES(NULL,'.$name.','.$phonenumber.','.$message.')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo'<script>window.alert("successfull")</script>';
	header('refresh:0; url=contact-us.html');
}else{
		echo'<script>window.alert("failed")</script>';
		header('refresh:0; url=contact-us.html');
	
}
?>