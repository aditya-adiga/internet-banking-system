<?php
  session_start();
  include_once 'Account.php';
  include("dbConnect.php");
?>
<?php
  if (isset($_POST['login2'])) {
    
    $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());

    $res2 = mysqli_query($conn, "UPDATE customer SET Customer_street = '$_POST[cStreet]', Customer_city = '$_POST[cCity]', Customer_phone = '$_POST[cPhone]' WHERE Customer_name = '$_SESSION[y]'") or die();

    $res3 = mysqli_query($conn, "UPDATE account SET Branch_name = '$_POST[cbName]' WHERE Account_number = '$_SESSION[x]'") or die();
    echo "res2: ".$res2."<br>";
    echo "res2: ".$res2."<br>";
    if($res2 && $res3){
        ?>
        <script>
        alert('Information is updated...');
        window.location='admin2.php'
        </script>
        <?php
    } else {
        ?>
        <script>
        alert('error updating...');
        window.location='admin2.php'
        </script>
        <?php
    }
  }    
?>


<!DOCTYPE html>
<html>
<head>
  <title>Update Details</title>
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
        <h2>Update Customer Details </h2>
      </div>

      <div class="panel-body">
        <div style="max-width: 600px; margin: 0 auto">
            <?php
               $obAccount = new Account();
               $acNum = $_POST['acNo'];
               $rs = $obAccount->showAccountInfo($acNum);

               if(mysqli_num_rows($rs) < 1) { 
                  ?>
                  <p>Invalid Account Number </p><a href="admin2.php">Try again!</a>
                  <?php
                  die(mysqli_error()); // TODO: better error handling
               }       
               $row=mysqli_fetch_array($rs);
            ?>

            <form action="" method="post">
             
              <div class="form-group">
                <label for="deposit">Account Number</label>
                <input type="text" name="cNum" disabled class="form-control" value="<?php echo $row[1]; $_SESSION['x'] = $row[1]; ?>" />
              </div>

              <div class="form-group">
                <label for="deposit">Customer Name</label>
                <input type="text" name="cName" disabled class="form-control" value="<?php echo $row[0]; $_SESSION['y'] = $row[0];  ?>" />
              </div>

              <div class="form-group">
                <label for="deposit">Branch Name</label>
                <input type="text" name="cbName" required class="form-control" value="<?php echo $row[3]; ?>" />
              </div>

              <div class="form-group">
                <label for="deposit">Customer Street</label>
                <input type="text" name="cStreet" required class="form-control" value="<?php echo $row[5]; ?>" />
              </div>

              <div class="form-group">
                <label for="deposit">Customer City</label>
                <input type="text" name="cCity" required class="form-control" value="<?php echo $row[6]; ?>" />
              </div>

              <div class="form-group">
                <label for="deposit">Customer Phone Number</label>
                <input type="text" name="cPhone" required class="form-control" value="<?php echo $row[8]; ?>" />
              </div>
              
                
              <button type="submit" name="login2" class="btn btn-success">Update</button>
            </form>
       </div>
      </div>
     </div>

      
    
   </div>

</body>
</html>