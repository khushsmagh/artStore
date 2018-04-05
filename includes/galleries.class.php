<?php

class Galleries {
	
	protected $resultSet;
	
	function __construct() {
		
		$sql = "SELECT * 
		  FROM galleries
		 ORDER BY GalleryCountry, GalleryName";

		$query 	= new Query($sql);
		$this->resultSet = $query->resultSet();
	}

	public function allGalleries() {
		return $this->resultSet;
	}
	
}