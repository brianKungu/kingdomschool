<?php
$conn=mysqli_connect("localhost","root","","kingdomhigh")or die(mysqli_error($conn));
$db=mysqli_select_db($conn,"kingdomhigh");
PHP: mysqli::query - Manual[^] call for success.

$parentsname=$_POST['parent'];
$phonenumber=$_POST['number'];
$studentsname=$_POST['student'];
$studentsgrade=$_POST['grade'];
$formerschool=$_POST['name'];
$homeaddress=$_POST['address'];
$query="INSERT INTO admission(id,parentsname,phonenumber,studentsname,studentsgrade,formerschool,homeaddress)VALUES(NULL,'.$parentsname.','.$phonenumber.','.$studentsname.','.$studentsgrade.','.$formerschool.','.$homeaddress.')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo'<script>window.alert("successfull")</script>';
	header('refresh:0; url=admissions.html');
}else{
		echo'<script>window.alert("failed")</script>';
		header('refresh:0; url=admissions.html');
	
}

?>