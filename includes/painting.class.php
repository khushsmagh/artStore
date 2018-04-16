<?php
require_once('includes/query.class.php');

class Painting {
	
	protected $paintingID;
	protected $imageFileName;
	protected $title;
	protected $price;
	protected $artist;
	
	function __construct($pID) {

		if(is_numeric($pID)){
			$sql = "SELECT * 
					  FROM paintings
					  JOIN artists ON paintings.ArtistID = artists.ArtistID
					 WHERE PaintingID = $pID ";
					
			$query 	= new Query($sql);
			$result = $query->resultSet()[0];

			$this->paintingID = $result['PaintingID'];
			$this->imageFileName = $result['ImageFileName'];
			$this->title = $result['Title'];
			$this->price = $result['Cost'];
			$this->artist = $result['FirstName'].' '.$result['LastName'];
		}
	}

	public function outputThumbnail() {

?>
		<div class="col-md-3">
			<div class="thumbnail">
				<a href = "iwppa2-works.php?PaintingID=<?php echo $this->paintingID; ?>"><img class="img-thumbnail" src="images/works/square-medium/<?php echo $this->imageFileName; ?>.jpg" alt="<?php echo $this->title; ?>"></a>
				<div>
					<p class="similarTitle"><a href="#"><b><?php echo $this->title; ?></b></a></p>
					<div class="row">
						<div class="col-md-4">
							<a href = "iwppa2-works.php?PaintingID=<?php echo $this->paintingID; ?>">
							<button class="btn btn-primary btn-sm" type="button">
							<span class="glyphicon glyphicon-info-sign"></span> View
							</button></a>
						</div>
						<div class="col-md-4">
							<button class="btn btn-success btn-sm" type="button">
							<span class="glyphicon glyphicon-gift"></span> Wish
							</button>
						</div>
						<div class="col-md-4">
							<form action="add-to-cart.php" method="POST" class="add-button">
								<button class="btn btn-info btn-sm add-button" type="submit">
								<input type="hidden" name="paintingID" value="<?php echo $this->paintingID; ?>" >
								<span class="glyphicon glyphicon-shopping-cart"></span>Cart
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	public function outputMiniature() {
	 	echo '<div class="media">
					<a href="iwppa2-works.php?PaintingID='.$this->paintingID.'" class="pull-left">
						<img class="media-object"  src="images/works/square-tiny/'.$this->imageFileName.'.jpg" alt="'.$this->title.'" width="32">
					</a>
					<div class="media-body">
						<p ><a href="iwppa2-works.php?PaintingID='.$this->paintingID.'">'.$this->title.'</a></p>
					</div>
				</div>';
	}

	public function outputShoppingCart() {
		echo '<img class="media-object" src="images/works/square-tiny/'.$this->imageFileName.'.jpg" alt="'.$this->title.'" width="32">';
	}

	public function price() {
		return $this->price;
	}

	public function artist() {
		return $this->artist;
	}
	
}