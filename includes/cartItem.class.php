<?php
require_once('includes/query.class.php');

class CartItem {
	
	protected $paintingID;
	protected $frameID;
	protected $glassID;
	protected $mattID;
	
	function __construct($pID, $fID, $gID, $mID) {
		
		$this->paintingID = $pID;
		$this->frameID = $fID;
		$this->glassID = $gID;
		$this->mattID = $mID;

	}

	public function paintingID() {
		return $this->paintingID;
	}

	public function frameID() {
		return $this->frameID;
	}

	public function glassID() {
		return $this->glassID;
	}

	public function mattID() {
		return $this->mattID;
	}

	public function getPrice() {
		
		$totalPrice = 0;

		$sql = "SELECT Cost 
				  FROM paintings
				 WHERE PaintingID = $this->paintingID";
		$query 	= new Query($sql);
		$resultSet = $query->resultSet();
		$totalPrice = $totalPrice + $resultSet[0][0];

		$sql = "SELECT Price 
				  FROM typesframes
				 WHERE FrameID = $this->frameID";
		$query 	= new Query($sql);
		$resultSet = $query->resultSet();
		$totalPrice = $totalPrice + $resultSet[0][0];

		$sql = "SELECT Price 
				  FROM typesglass
				 WHERE GlassID = $this->glassID";
		$query 	= new Query($sql);
		$resultSet = $query->resultSet();
		$totalPrice = $totalPrice + $resultSet[0][0];
		
		return $totalPrice;
	}
}