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
                <div class="btn-group">
                    <button class="btn btn-default" type="button" >
                        <span style="color:rgb(0, 143, 190)"><span class="glyphicon glyphicon-gift"></span> Add to Favorites List</span>
                    </button>
                </div>
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
                            <td><?php echo $row->getArtistlink()?></td>
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
</div>
                <?php
                OutputArtistPainting();
                ?>
                <!--<div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">

                            <a href = "iwppa2-works.php?PaintingID=<?php //echo $result['PaintingID']?>"><img class="img-thumbnail" src="images/works/square-medium/<?php //echo $result['ImageFileName']?>.jpg" alt="..."></a>
                                <div>
                                    <p class="similarTitle"><a href="#"><b><?php //echo $result['Title']?></b></a></p>
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
                </div>-->
            </div>
            </div>
<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
