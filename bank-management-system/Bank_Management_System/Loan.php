<?php
   
   include("Customer.php");
   class Loan extends Customer 
   {
   	private $loanNumber;
   	private $branchName;
   	private $amount;

    public function createLoan($brName){  //public function opeAccount($number)
  		$this->amount = 0;
        
      $res = mysqli_query("insert into lc set name = 'Asif'");
   	  $sql = mysqli_query("select * from lc");
   	  while ($row=mysqli_fetch_array($sql)) {
   		$x = $row[0];
   	  }

   	  $sql2 = mysqli_query("select concat('LN-', id) as id from ac where id = '$x'");
      $row2 = mysqli_fetch_row($sql2);

      $this->loanNumber = $row2[0];
         
      $this->branchName = $branchName;

      $res = mysqli_query("INSERT into loan(Loan_number, Branch_name, Amount) VALUES('$this->loanNumber', '$this->branchName', '$this->amount')");

        return $res;
  	}
   }
?>