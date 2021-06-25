<?php
  include_once 'Loan.php';

  $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
  // include 'dbConnect.php';
  // include_once 'AccountNumber.php';

  // class Account extends AccountNumber
  class Account extends Loan
  {
  	private $accNumber;
  	private $balance;
    private $branchName;

  	public function openAccount($brName){  //public function opeAccount($number)
  		$this->balance = 500;
      $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());  
      $res = mysqli_query($conn, "insert into ac set name = 'Asif'");
   		$sql = mysqli_query($conn, "select * from ac");
   		while ($row=mysqli_fetch_array($sql)) {
   			$x = $row[0];
   		}

   		$sql2 = mysqli_query($conn, "select concat('AC-', id) as id from ac where id = '$x'");
      $row2 = mysqli_fetch_row($sql2);

      $this->accNumber = $row2[0];
         
      $this->branchName = $brName;

      $res = mysqli_query($conn, "INSERT into account(Account_number, Branch_name, Balance) VALUES('$this->accNumber', '$this->branchName', '$this->balance')");

        return $res;
  	}

    public function getAcNumber(){
      return $this->accNumber;
    }

    public function updateBalance($aNumber, $value){    
      $this->accNumber = $aNumber;
      $this->balance = $value;
      $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
      $res = mysqli_query($conn, "UPDATE account SET Balance='$this->balance' WHERE Account_number='$this->accNumber'");

      return $res;
    }

    public function showBalance($acNo){
      $this->accNumber = $acNo;
      $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
      $res = mysqli_query($conn, "select d.Customer_name, d.Account_number, a.Balance from depositor d, account a where d.Account_number = '$this->accNumber' and a.Account_number = '$this->accNumber'");

      return $res;
    }

    public function showAccountInfo($acNo){
      $this->accNumber = $acNo;
      $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
      $res = mysqli_query($conn, "select d.Customer_name, d.Account_number, a.Balance, b.Branch_name, b.Branch_city, c.Customer_street, c.Customer_city from depositor d, account a, branch b, customer c where d.Account_number = '$this->accNumber' and a.Account_number = '$this->accNumber' and a.Branch_name=b.Branch_name and d.Customer_name=c.Customer_name");

      return $res;
    }

    public function showAllAccountInfo(){
      $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
      $res = mysqli_query($conn, "select d.Customer_name, d.Account_number, c.Customer_street, c.Customer_city, a.Balance, b.Branch_name, b.Branch_city from depositor d, account a, branch b, customer c where d.Account_number = a.Account_number and d.Customer_name = c.Customer_name and a.Branch_name=b.Branch_name order by d.Account_number");

      return $res;      
    }

    public function closeAccount($acNo){
      $this->accNumber = $acNo;
      $conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
      $res = mysqli_query($conn, "DELETE FROM account WHERE Account_number = '$this->accNumber'");

      return $res;
    }

  }

?>