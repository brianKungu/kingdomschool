<?php
include('connect.php');

if(!isset($_SESSION['user_id'])){

	 header("Location: http://localhost/kingdom/login.php");
}
include('process_login.php');
?>
<html>
 <head>
    <title>Register User</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 </head>
 <body>
   <div class="container">
       <div class="row">
           <div class="col-sm-4"></div>
           <div class="col-sm-4"></div>
           <div class="col-sm-4">
             
              <a href="logout.php"><button type="button" class="btn btn-danger">logout</button> </a>
			  <a href="database_record.php"><button type="button" class="btn btn-success">admission</button></a>
           </div>
       </div>
       <div class="table-responsive">
        <center> <h2>Users</h2></center>
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <td>id</td>
                       <td>name</td>
                       <td>phonenumber</td>
                       <td>message</td>
                       
                   </tr>
               </thead>
               <tbody>
                   <?php
                      $select="SELECT * FROM contact";
                      $select_query=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_array($select_query)){ 
                   ?>
                   <tr>
                       <td><?php echo $row['id']?></td>
                       <td><?php echo $row['name']?></td>
                       <td><?php echo $row['phonenumber']?></td>
                       <td><?php echo $row['message']?></td>
                       <?php echo "<td> <a href='view.php?id=".$row['id']."' class='btn btn-success'>view</a> 
                       <a  href='delete.php?id=". $row['id'] ."' class='btn btn-danger'>delete</a>  
                        <a href='update.php?id=". $row['id'] ."' class='btn btn-primary'>update</a></td>";?>
                   </tr>
                    <?php
                      }
                    ?>
               </tbody>
           </div>
       </div>
   </div>
 </body>
</html>