<?php
   
  //  include_once 'Ac count.php';
   include_once 'Customer.php';
   include("dbConnect.php");
   class Loan extends Customer 
   {
   	private $loanNumber;
   	private $branchName;
   	private $amount;

    public function createLoan($loanNumber,$branchName,$amount){  //public function opeAccount($number)
  		$this->amount = $amount;
        
      $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
      // $res = mysqli_query($conn, "insert into lc set name = 'Asif'");
   	  // $sql = mysqli_query($conn, "select * from lc");
   	  // while ($row=mysqli_fetch_array($sql)) {
   		// $x = $row[0];
   	  // }

   	  // $sql2 = mysqli_query($conn, "select concat('LN-', id) as id from ac where id = '$x'");
      // $row2 = mysqli_fetch_row($sql2);

      $this->loanNumber = $loanNumber;
         
      $this->branchName = $branchName;

      $res = mysqli_query($conn, "INSERT into loan(Loan_number, Branch_name, Amount) VALUES('$this->loanNumber', '$this->branchName', '$this->amount')");

        return $res;
  	}
   }
?>