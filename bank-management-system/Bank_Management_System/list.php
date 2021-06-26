<?php
  session_start();
  include_once 'Account.php';
  include("dbConnect.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
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
            <li><a href="admin2.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </div>
     </nav>

     <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Accounts Information</h2>
      </div>

      <div class="panel-body">
            <?php
               $obAccount = new Account();
               
               $rs2 = $obAccount->showAllAccountInfo();

               if(mysqli_num_rows($rs2) < 1) { 
                  ?>
                  <p>Invalid Account Number </p><a href="deposit.php">Try again!</a>
                  <?php
                  die(mysqli_error($conn)); // TODO: better error handling
               } ?>

              <table class="table table-striped">
                <tr>
                  <td>Account Number</td>
                  <td>Customer Name</td>
                  <td>Customer Street</td>
                  <td>Customer City</td>
                  <td>Balance</td>
                  <td>Branch Name</td>
                  <td>Branch City</td>   
                  <td>Customer Phone Number</td>               
                  <td>Account Type</td>               
                </tr>
          <?php  while ($row2=mysqli_fetch_array($rs2)){
            ?>     
              <tr>
                  <th><?php echo $row2[1]; ?></th>
                  <th><?php echo $row2[0]; ?></th>
                  <th><?php echo $row2[2]; ?></th>
                  <th><?php echo $row2[3]; ?></th>
                  <th><?php echo $row2[4]; ?></th>
                  <th><?php echo $row2[5]; ?></th>
                  <th><?php echo $row2[6]; ?></th>
                  <th><?php echo $row2[7]; ?></th>
                  <th><?php echo $row2[8]; ?></th>

              </tr>
              <?php } ?>
            </table>
      </div>
     </div>

        
    
   </div>

</body>
</html>