<?php 
$pageTitle = 'Galleries';
include('includes/header.inc.php'); 
require_once('includes/galleries.class.php');
require_once('includes/googlePlace.class.php');
$galleries = new Galleries();
$galleries = $galleries->allGalleries();
?>
		<h2>Galleries</h2>
		
<?php 
		foreach($galleries as $gallery){
			//$googleData = new GooglePlace($gallery['GooglePlaceID']);
			//$hours = $googleData->openingHours();
?>	
		<div class="col-md-4">
			<div class="thumbnail">
				<h4><?php echo $gallery['GalleryName']; ?></h4>
				<?php echo $gallery['GalleryCity'].', '.$gallery['GalleryCountry']; ?>
				<br>
				<a href="gallery.php?gallery=<?php echo $gallery['GalleryID']; ?>" class="btn btn-info" role="button"><span class="glyphicon glyphicon-info-sign"></span> Details</a>
			</div>
		</div>	
<?php	
		} 
?>

 		
<?php include('includes/footer.inc.php'); ?>
