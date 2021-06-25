<?php
  include_once 'Branch.php';
//   include 'dbConnect.php';
  
  class Customer extends Branch
  {
  	private $customerName;
  	private $customerSreet;
  	private $customerCity;

  	public function createCustomer($name, $street, $city){
  		$this->customerName = $name;
  		$this->customerSreet = $street;
  		$this->customerCity = $city;
		$conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
        $res1 = mysqli_query($conn, "INSERT into customer(Customer_name, Customer_street, Customer_city) VALUES('$this->customerName', '$this->customerSreet', '$this->customerCity')");

        return $res1;
  	}

  }
?>