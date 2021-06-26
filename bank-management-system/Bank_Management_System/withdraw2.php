<?php
  session_start();
  include_once 'Account.php';
  include("dbConnect.php");
?>
<?php
  if (isset($_POST['login2'])) {
    $obAccount2 = new Account();
    if($_SESSION['bal'] - $_POST['wMoney'] < 500){
      ?>
      <script>
      alert('Not Enough Balance to withdraw...');
      window.location='withdraw.php'
      </script>
      <?php
    } else {
      $value = $_SESSION['bal'] - $_POST['wMoney'];
 
      $res2 = $obAccount2->updateBalance($_SESSION['aNum'], $value);
    
      if($res2){
      ?>
        <script>
        alert('Withdraw Succeessful...');
        window.location='withdraw.php'
        </script>
        <?php
      } else {
        ?>
        <script>
        alert('error updating balance...');
        window.location='withdraw.php'
        </script>
        <?php
      }
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
            <li><a href="user.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </div>
     </nav>

     <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Withdraw Money</h2>
      </div>

      <div class="panel-body">
        <div style="max-width: 600px; margin: 0 auto">
            <?php
               $obAccount = new Account();
               $acNum = $_POST['acNo'];
               $rs = $obAccount->showBalance($acNum);

               if(mysqli_num_rows($rs) < 1) { 
                  ?>
                  <p>Invalid Account Number </p><a href="deposit.php">Try again!</a>
                  <?php
                  die(mysqli_error()); // TODO: better error handling
               }       
               $rowa=mysqli_fetch_array($rs);
            ?>
            
            <table class="table table-striped">
              <tr>
                  <td width="35%">Account Number: </td>
                  <th><?php echo $rowa[1]; $_SESSION['aNum'] = $rowa[1]; ?></th>                  
              </tr> 
              <tr>
                  <td width="35%">Customer Name: </td>
                  <th><?php echo $rowa[0]; ?></th>
              </tr> 
                
              <tr>
                <td width="35%">Balance: </td>
                <th><?php echo $rowa[2]; $curBal = $rowa[2]; $_SESSION['bal'] = $rowa[2]; ?></th>
              </tr>
              
            </table>

            <form action="" method="post">
             
              <div class="form-group">
                <label for="deposit">Enter Withdrawal Amount</label>
                <input type="text" name="wMoney" required class="form-control" />
              </div>
                
              <button type="submit" name="login2" class="btn btn-success">Withdraw</button>
            </form>
       </div>
      </div>
     </div>

     
    
   </div>

</body>
</html>