<?php 
$pageTitle = 'Empty Page';
include('includes/header.inc.php'); 
require_once('includes/painting.class.php');

$myTestPainting = new Painting(15);
?>

empty page

<?php $myTestPainting->outputThumbnail(); ?>
<?php include('includes/footer.inc.php'); ?>
