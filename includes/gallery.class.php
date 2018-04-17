<?php
require_once('includes/query.class.php');
require_once('includes/painting.class.php');

class Gallery {
	
	protected $resultSet;
	protected $paintings;
	
	function __construct($galleryId) {
		
		$sql = "SELECT * 
		  FROM galleries
		 WHERE GalleryID = $galleryId";

		$query 	= new Query($sql);
		$this->resultSet = $query->resultSet();

		$sql = "SELECT PaintingID 
		  FROM paintings
		 WHERE GalleryID = $galleryId";

		$query 	= new Query($sql);
		$this->paintings = $query->resultSet();

		}

	public function galleryDetail() {
		return $this->resultSet[0];
	}
	
	public function artWorks(){
		echo '
			<h2>paintings in this gallery</h2>
			<div class="row fix">';
		foreach($this->paintings as $painting){
			$painting = new Painting($painting['PaintingID']);
			$painting->outputThumbnail();
			}

		echo '</div>';
	}
	
}