<?php 
$pageTitle = 'Artist detail';
include('includes/header.inc.php'); 

include 'includes/view-single-artist.php';

$artistID = $_GET['ArtistID'];
$row = ViewSingleArtist();
?>
            <h1><?php echo $row['Name']?></h1>
        <div class="row">
            <div class="col-md-3">
                <img src="images/artists/medium/<?php echo $row['ArtistID']?>.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat"/>
            </div>
            <div class="col-md-5">
                <p>
                   <?php echo $row['Details'] ?></p>
                <div class="btn-group">
                    <button class="btn btn-default" type="button" >
                        <span style="color:rgb(0, 143, 190)"><span class="glyphicon glyphicon-gift"></span> Add to Favorites List</span>
                    </button>
                </div>
                <p>&nbsp;</p>
                <div class="panel panel-default">
                    <div class="panel-heading">Artist Details</div>
                    <table class="table">
                        <tr>
                            <th>Date:</th>
                            <td><?php echo $row['YearOfBirth'] ?>-<?php echo $row['YearOfDeath']?></td>
                        </tr>
                        <tr>
                            <th>Nationalitly:</th>
                            <td><?php echo $row['Nationality'] ?></td>
                        </tr>
                        <tr>
                            <th>More info:</th>
                            <td><?php echo $row['ArtistLink'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <h2 style="font-family: Stoke">Art By <?php echo $row['Name'] ?></h2>
                </div>
                <?php
                $sql = "select * from paintings Where ArtistID = $artistID";
                $query = $connection->query($sql);
                while($result = $query->fetch()) {
                ?>

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">


                                <img class="img-thumbnail" src="images/works/square-medium/<?php echo $result['ImageFileName']?>.jpg" alt="...">
                                <div>
                                    <p class="similarTitle"><a href="#"><b><?php echo $result['Title']?></b></a></p>
                                    <button class="btn btn-primary btn-sm" type="button"><span
                                                class="glyphicon glyphicon-info-sign"></span> View
                                    </button>
                                    <button class="btn btn-success btn-sm" type="button"><span
                                                class="glyphicon glyphicon-gift"></span> Wish
                                    </button>
                                    <button class="btn btn-info btn-sm" type="button"><span
                                                class="glyphicon glyphicon-shopping-cart"></span>Cart
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
            </div>
<?php include('includes/footer.inc.php'); ?>
