<?php   
   define('DB_SERVER','localhost');
   define('DB_USER','root');
   define('DB_PASS' ,'mysql123');
   define('DB_NAME', 'oopbank');

   $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysql_error());
		
?>   