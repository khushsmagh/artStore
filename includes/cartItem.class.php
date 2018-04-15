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
	
}