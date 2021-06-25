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
     			<a class="navbar-brand" href="index.php">HDFC Internet Banking System</a>
     		</div>
     		<ul class="nav navbar-nav pull-right">
     		    <li><a href="user.php">Home</a></li>
     			<li><a href="logout.php">Logout</a></li>
     			
     		</ul>
     	</div>
     </nav>

     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h2>WElCOME! Mr. <?php echo $_SESSION['name']; ?></h2>
     	</div>
          <div style="max-width: 250px; margin: 0 auto">
            <h4>1. <a href="open.php">Open an Acccount</a></h4>
            <h4>2. <a href="deposit.php">Deposit Money</a></h4>
            <h4>3. <a href="withdraw.php">Withdraw Money</a></h4>
            <h4>4. <a href="transfer.php">Transfer Money</a></h4>
            <h4>5. <a href="info.php">Show Account's Information</a></h4>
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