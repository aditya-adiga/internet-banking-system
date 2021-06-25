<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="css/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
</head>

<body>
	<div style="background-image: url('img_girl.jpg');">
	<style>
		body {
			background-image: url('https://i.pinimg.com/originals/53/aa/f6/53aaf6011bba6d6bb0499e1eef12c26d.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;  
			background-size: cover;
		}
	</style>
	</div>
   <div class="container">
     <nav class="navbar navbar-default">
     	<div class="container-fluid">
     		<div class="navbar-header">
     			<a class="navbar-brand" href="admin2.php">HDFC Internet Banking System</a>
     		</div>
     		<ul class="nav navbar-nav pull-right">
     		    <li><a href="admin2.php">Home</a></li>
     			<li><a href="logout.php">Logout</a></li>
     			
     		</ul>
     	</div>
     </nav>

     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h2>Admin Panel</h2>
     	</div>
          <div style="max-width: 300px; margin: 0 auto">
            <h4>1. <a href="list.php">All Account Holder's List</a></h4>
            <h4>2. <a href="update.php">Update an Account Information</a></h4>
            <h4>3. <a href="close.php">Close an Account</a></h4>
            <h4>4. <a href="loan.php">Loan Information</a></h4>
            <h4>5. <a href="addUser.php">Add Employee</a></h4>
          </div>
     	<div class="panel-body">
     	  
     	</div>
     </div>

     <div class="well">
     	<h3>www.myhdfcbank.com
     	   <!-- <span class="pull-right">Like Us: www.facebook.com/samy</span> -->
     	</h3>
     </div>   
   	
   </div>

</body>
</html>