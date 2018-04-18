<?php
require_once('includes/query.class.php');

class Customer {
	
	protected $CustomerID;
	protected $FirstName;
	protected $LastName;	
	protected $Address;	
	protected $City;	
	protected $Region;	
	protected $Country;	
	protected $Postal;	
	protected $Phone;	
	protected $Email;		
	
	function __construct($cid) {
		
		if(is_numeric($cid)){
			$cid = (int) $cid;
			$sql = "SELECT * 
			  FROM customers
			  WHERE CustomerID = '$cid' ";

			$cust 	= new Query($sql);
			$set 	= $cust->resultSet();
			$count 	= $cust->resultCount();

			if($count ==1){
				$this->CustomerID = $set[0]['CustomerID'];
				$this->CustomerID = $set[0]['CustomerID'];
				$this->FirstName = $set[0]['FirstName'];
				$this->LastName = $set[0]['LastName'];	
				$this->Address = $set[0]['Address'];	
				$this->City = $set[0]['City'];	
				$this->Region = $set[0]['Region'];	
				$this->Country = $set[0]['Country'];	
				$this->Postal = $set[0]['Postal'];	
				$this->Phone = $set[0]['Phone'];	
				$this->Email = $set[0]['Email'];
			}
		}
	}

	public function outputAddress() {
		echo $this->FirstName.' '.$this->LastName.'<br>'.
			 $this->Address.'<br>'.
			 $this->City.' '.$this->Region.' '.$this->Postal.'<br>'.
			 $this->Country;
	}

	public function getCountry() {
		return $this->Country;
	}

}