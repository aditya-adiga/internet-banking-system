<?php
  include_once 'Branch.php';
//   include 'dbConnect.php';
  
  class Customer extends Branch
  {
  	private $customerName;
  	private $customerSreet;
  	private $customerCity;
	private $customerAccountType;
	private $customerAdhaar;
	private $customerPhone;

  	public function createCustomer($name, $street, $city, $accountType, $cadhaar, $cphone){
  		$this->customerName = $name;
  		$this->customerSreet = $street;
  		$this->customerCity = $city;
		$this->customerAccountType = $accountType;
		$this->customerAdhaar = $cadhaar;
		$this->customerPhone = $cphone;
		$conn = mysqli_connect('localhost','root','mysql123','oopbank') or die('localhost connection problem'.mysql_error());
        $res1 = mysqli_query($conn, "INSERT into customer(Customer_name, Customer_street, Customer_city, accountType, Customer_adhaar, Customer_phone) VALUES('$this->customerName', '$this->customerSreet', '$this->customerCity', '$this->customerAccountType', '$this->customerAdhaar', '$this->customerPhone')");

        return $res1;
  	}

  }
?>