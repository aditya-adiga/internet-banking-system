<!DOCTYPE html>
<html>
<head>
  <title>User Page</title>
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
          <h2>Account's Information</h2>
        </div>

        <div class="panel-body">
          <div style="max-width: 600px; margin: 0 auto">
            <form action="info2.php" method="post">
              <div class="form-group">
                <label for="email">Enter Account Number</label>
                <input type="text" name="acNo" required class="form-control" />
              </div>

              <button type="submit" name="login" class="btn btn-success">Confirm</button>
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