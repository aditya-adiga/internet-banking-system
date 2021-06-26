<?php
  session_start();
  include_once 'Account.php';
  include("dbConnect.php");
?>
<?php
  if (isset($_POST['login2'])) {
    $obAccount2 = new Account();
 
    $res1 = $obAccount2->closeAccount($_SESSION['aNum']);
    $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());

    $res2 = mysqli_query($conn, "DELETE FROM depositor WHERE Account_number = '$_SESSION[aNum]'");
    
    if($res2){
        ?>
        <script>
        alert('Account is closed Successfully...');
        window.location='admin2.php'
        </script>
        <?php
    } else {
        ?>
        <script>
        alert('error Occured...');
        window.location='admin2.php'
        </script>
        <?php
    }
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
        <h2>Account Details</h2>
      </div>

      <div class="panel-body">
        <div style="max-width: 600px; margin: 0 auto">
            <?php
               $obAccount = new Account();
               $acNum = $_POST['acNo'];
               $rs = $obAccount->showAccountInfo($acNum);

               if(mysqli_num_rows($rs) < 1) { 
                  ?>
                  <p>Invalid Account Number </p><a href="deposit.php">Try again!</a>
                  <?php
                  die(mysqli_error()); // TODO: better error handling
               }       
               $row=mysqli_fetch_array($rs);
            ?>
            
            <table class="table table-striped">
              <tr>
                  <td width="35%">Account Number: </td>
                  <th><?php echo $row[1]; $_SESSION['aNum'] = $row[1]; ?></th>                  
              </tr> 
              <tr>
                  <td width="35%">Customer Name: </td>
                  <th><?php echo $row[0]; $_SESSION['aName'] = $row[1]; ?></th>
              </tr> 
                
              <tr>
                <td width="35%">Balance: </td>
                <th><?php echo $row[2]; ?></th>
              </tr>

              <tr>
                <td width="35%">Branch Name: </td>
                <th><?php echo $row[3]; ?></th>
              </tr>

              <tr>
                <td width="35%">Branch City: </td>
                <th><?php echo $row[4]; ?></th>
              </tr>
              
              <tr>
                <td width="35%">Customer Street: </td>
                <th><?php echo $row[5]; ?></th>
              </tr>

              <tr>
                <td width="35%">Customer City: </td>
                <th><?php echo $row[6]; ?></th>
              </tr>

              <tr>
                <td width="35%">Account Type: </td>
                <th><?php echo $row[7]; ?></th>
              </tr>

              <tr>
                <td width="35%">Customer Phone Number: </td>
                <th><?php echo $row[8]; ?></th>
              </tr>
             
              
            </table>

            <form action="" method="post">
                
              <button type="submit" name="login2" class="btn btn-success">Close</button>

            </form>
       </div>
      </div>
     </div>

      
    
   </div>

</body>
</html>