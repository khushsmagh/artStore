<?php
if( $_SERVER['REQUEST_METHOD'] == 'GET' ){
	if(!isset($_GET['gallery']) || !is_numeric($_GET['gallery'])){
		header("Location: galleries.php");
	}else{
		$galleryID = $_GET['gallery'];
	}
}

require_once('includes/gallery.class.php');

$gallery = new Gallery($galleryID);
$thisGallery = $gallery->galleryDetail();	
$pageTitle = $thisGallery['GalleryName'];

include('includes/header.inc.php'); 
require_once('includes/googlePlace.class.php');
?>
		<h2><?php echo $thisGallery['GalleryName']; ?></h2>
		<h4><?php echo $thisGallery['GalleryNativeName']; ?></h4>
		<a href="<?php echo $thisGallery['GalleryWebSite']; ?>" class="btn btn-info" role="button"><span class="glyphicon glyphicon-globe"></span> Website</a>

<?php 
			$googleData = new GooglePlace($thisGallery['GooglePlaceID']);
			$hours = $googleData->openingHours();
			if(is_array($hours)){
				echo "<h5>Opening Hours:</h5>";
				foreach ($hours as $day){
					echo $day.'<br>';
				}
			}
?>
		<div class="row fix">
			<?php $gallery->artWorks(); ?>
 		</div>
		
<?php include('includes/footer.inc.php'); ?>
