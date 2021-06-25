<?php
   
   define('DB_SERVER','localhost');
   define('DB_USER','root');
   define('DB_PASS' ,'');
   define('DB_NAME', 'oopbank');

   class AccountNUmber 
   {
   	
   	public function __construct()
   	{
   		$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
		mysqli_select_db(DB_NAME, $conn);
   	}

   	public function acGenerate(){
   		$res = mysqli_query("insert into ac set name = 'Asif'");
   		$sql = mysqli_query("select * from ac");
   		while ($row=mysql_fetch_array($sql)) {
   			$x = $row[0];
   		}

   		$sql2 = mysqli_query("select concat('AC-', id) as id from ac where id = '$x'");
        $row2 = mysqli_fetch_row($sql2);

        $y = $row2[0];
        return $y;
   	}

   }
?>