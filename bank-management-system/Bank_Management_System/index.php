<?php
  session_start();
  include ("dbConnect.php");
  extract($_POST);
  if (isset($login)) {
    $rs = mysqli_query($conn, "select * from user where custID = '$custID' and password = '$password'");
    if (mysqli_num_rows($rs) < 1) {
      $found = "N";
    } else {
      $_SESSION['custID'] = $custID;
      $row = mysqli_fetch_array($rs);
      $_SESSION['name'] = $row['Name'];
    }
  }
  if (isset($_SESSION['custID'])) {
    header("Location: user.php");
   }

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
   <div class="container" align="center">
     <nav class="navbar navbar-default">
     	<div class="container-fluid">
     		<div class="navbar-header">
     			<a class="navbar-brand" href="index.php">HDFC Internet Banking System</a>
     		</div>
     		<ul class="nav navbar-nav pull-right">
     		    <li><a href="index.php">Home</a></li>
     			<li><a href="index.php">User Login</a></li>
     			<li><a href="admin.php">Admin Login</a></li>
     			
     		</ul>
     	</div>
     </nav>

     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h2>User Login</h2>
     	</div>

     	<div class="panel-body">
     	  <div style="max-width: 600px; margin: 0 auto">
     		<form action="" method="post">
     			<div class="form-group" align="left">
     				<label for="email">Customer ID</label>
     				<input type="text" name="custID" class="form-control" />
     			</div>

     			<div class="form-group" align="left">
     				<label for="password">password</label>
     				<input type="password" name="password" class="form-control" />
     			</div>
     			<?php
                   if (isset($found)) {
                     echo "Invalid Username or Password" . "<br>";
                   }
                ?>
     			<button type="submit" name="login" class="btn btn-success">Login</button>
     		</form>
     	 </div>
     	</div>
     </div>

     <div class="well">
     	<h3>www.myhdfcbank.com
     	</h3>
     </div>   
   	
   </div>

</body>
</html>