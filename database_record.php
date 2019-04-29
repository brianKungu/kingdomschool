<?php
	include('connect.php');
	include('process_login.php');
?>
<html>
<header><title>Admission records</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	</header>

	<header>
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	</header>
<body>

<div class="container">

<a href="logout.php"><button type="button" class="btn btn-danger">logout</button></a>
<a href="database_recordcontact.php"><button type="button" class="btn btn-success">contact records</button></a>

	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>id</td>
					<td>parentsname</td>
					<td>phonenumber</td>
					<td>studentsname</td>
					<td>studentsgrade</td>
					<td>formerschool</td>
					<td>homeaddress</td>
				</tr>
			</thead>
			<tbody>
				<?php
					 $select="SELECT * FROM admission";
                      $select_query=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_array($select_query)){ 
				?>
				<tr>
					<td><?php echo $row{'id'}?></td>
					<td><?php echo $row{'parentsname'}?></td>
					<td><?php echo $row{'phonenumber'}?></td>
					<td><?php echo $row{'studentsname'}?></td>
					<td><?php echo $row{'studentsgrade'}?></td>
					<td><?php echo $row{'formerschool'}?></td>
					<td><?php echo $row{'homeaddress'}?></td>
					<?php echo "<td> <a href='view1.php?id=".$row['id']."' class='btn btn-success'>view</a> 
                       <a  href='delete1.php?id=". $row['id'] ."' class='btn btn-danger'>delete</a>  
                        <a href='update1.php?id=". $row['id'] ."' class='btn btn-primary'>update</a></td>";?>
				</tr>
				
			
			</tbody>
			<?php
					}
			?>
				

		
		</table>
	
	</div>

</div>


</body>


</html>