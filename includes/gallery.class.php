<?php
require_once('includes/query.class.php');

class Gallery {
	
	protected $resultSet;
	
	function __construct($galleryId) {
		
		$sql = "SELECT * 
		  FROM galleries
		 WHERE GalleryID = $galleryId";

		$query 	= new Query($sql);
		$this->resultSet = $query->resultSet();
		}

	public function galleryDetail() {
		return $this->resultSet[0];
	}
	
}