<?php
  session_start();
  include_once 'Account.php';
  include("dbConnect.php");
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
        <h2>Account's Information</h2>
      </div>

      <div class="panel-body">
        <div style="max-width: 600px; margin: 0 auto">
            <?php
               $obAccount = new Account();
               $acNum = $_POST['acNo'];
               
               $rs2 = $obAccount->showAccountInfo($acNum);

               if(mysqli_num_rows($rs2) < 1) { 
                  ?>
                  <p>Invalid Account Number </p><a href="deposit.php">Try again!</a>
                  <?php
                  die(mysql_error()); // TODO: better error handling
               }       
               $row2=mysqli_fetch_array($rs2);
            ?>
            
            <table class="table table-striped">
              <tr>
                  <td width="35%">Account Number: </td>
                  <th><?php echo $row2[1]; ?></th>                  
              </tr> 
              <tr>
                  <td width="35%">Customer Name: </td>
                  <th><?php echo $row2[0]; ?></th>
              </tr> 
                
              <tr>
                <td width="35%">Balance: </td>
                <th><?php echo $row2[2]; ?></th>
              </tr>

              <tr>
                <td width="35%">Branch Name: </td>
                <th><?php echo $row2[3]; ?></th>
              </tr>

              <tr>
                <td width="35%">Branch City: </td>
                <th><?php echo $row2[4]; ?></th>
              </tr>

              <tr>
                <td width="35%">Account Type: </td>
                <th><?php echo $row2[7]; ?></th>
              </tr>
              
            </table>

       </div>
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