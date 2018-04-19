<?php
require_once('includes/query.class.php');

class WishlistItem {
	
	protected $paintingID;
	
	function __construct($pID) {
		
		$this->paintingID = $pID;
	}

	public function paintingID() {
		return $this->paintingID;
	}


	public function getPrice() {
		
		$sql = "SELECT Cost 
				  FROM paintings
				 WHERE PaintingID = $this->paintingID";
		$query 	= new Query($sql);
		$resultSet = $query->resultSet();

		return $resultSet[0][0];
	}
}