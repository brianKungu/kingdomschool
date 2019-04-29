<?php

if(isset($_GET['id'])){
	$conn=mysqli_connect("localhost","root","","kingdomhigh");
	$id=$_GET['id'];
	$query=mysqli_query($conn,"delete from admission where id='$id'")or die(mysqli_error($conn));
    if($query){
		echo"<script>window.alert('data deleted successfully')</script>";
	    header('refresh:0;url=database_record.php');
	}
}
?>