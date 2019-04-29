<?php

$conn=mysqli_connect("localhost","root","","kingdomhigh") or die(mysqli_error($conn));
if(isset($_POST['Submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$admin=mysqli_query($conn,"select * from admin where username='$username'and password='$password'")or die(mysqli_error($conn));
    
	$row2=mysqli_num_rows($admin);
	
    if($row2==1){
		while($rows2=mysqli_fetch_array($admin)){
			
			$_SESSION['pass']=$rows2['password'];
			$_SESSION['user']=$rows2['username'];
    		?>
            <script>window.alert("Success");
            window.location.href='kingdom/admin/admin.php';
            </script>
            <?php
		}
	}else{
	?>
	<script>
	    window.alert("failed");
	    window.location.href='login.php';
	</script>
	<?php
	}
}

?>