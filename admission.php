<?php

$conn=mysqli_connect("localhost","root","","kingdomhigh");
$db=mysqli_select_db($conn,"kingdomhigh");

$pname=$_POST['parentsName'];
$pnumber=$_POST['phone'];
$studentsname=$_POST['studentsName'];
$studentsgrade=$_POST['studentsGrade'];
$formerschool=$_POST['formerschool'];
$homeaddress=$_POST['homeaddress'];
$query="INSERT INTO admission(id,parentsname,phonenumber,studentsname,studentsgrade,formerschool,homeaddress)VALUES(NULL,'$pname','$pnumber','$studentsname','$studentsgrade','$formerschool','$homeaddress')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo'<script>window.alert("successfull")</script>';
	header('refresh:0; url=admissions.html');
}else{
		echo'<script>window.alert("failed")</script>';
		header('refresh:0; url=admissions.html');
	
}
?>