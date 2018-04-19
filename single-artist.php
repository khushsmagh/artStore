<?php 
$pageTitle = 'Artist detail';
include ('includes/view-single-artist.php');
include('includes/header.inc.php');
$row = ViewSingleArtist();
?>
            <h1><?php echo $row->getFirstname().' '.$row->getLastname()?></h1>
        <div class="row">
            <div class="col-md-5">
                <img src="images/artists/medium/<?php echo $row->getArtistID()?>.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat"/>
            </div>
            <div class="col-md-6">
                <p>
                   <?php echo $row->getDetails() ?></p>
                <p>&nbsp;</p>
                <div class="panel panel-default">
                    <div class="panel-heading">Artist Details</div>
                    <div class = "panel-body">
                        <div id ="table_adjustment">
                    <table class="table">
                        <tr>
                            <th>Date:</th>
                            <td><?php echo $row->getYearofbirth() ?>-<?php echo $row->getYearofdeath()?></td>
                        </tr>
                        <tr>
                            <th>Nationalitly:</th>
                            <td><?php echo $row->getNationality()?></td>
                        </tr>
                        <tr>
                            <th>More info:</th>
                            <td><a href="<?php echo $row->getArtistlink(); ?>"><?php echo $row->getArtistlink(); ?></a></td>
                        </tr>
                    </table>
                </div>
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <h2 style="font-family: Stoke">Art By <?php echo $row->getFirstname().' '.$row->getLastname()?></h2>
                </div>
            </div>
        </div>
		<div class="row fix">
			<?php OutputArtistPainting(); ?>
		</div>
		
<?php include('includes/footer.inc.php'); ?>
