<?php
include 'includes/view-genres.php';
$pageTitle = 'Genres';
include('includes/header.inc.php');
?>
            
                <h2>Genres</h2>
				<div class="row fix">
					<?php OutputGenres(); ?>
				</div>
				
<?php include('includes/footer.inc.php'); ?>
