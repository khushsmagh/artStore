<?php 
$pageTitle = 'Detail page';
include ('includes/view-works.php');
include ('includes/view-reviews.php');
include('includes/header.inc.php');
$work = ViewWorks();
?>
                    <h2><?php echo $work->getPaintingTitle() ?></h2>

                    <p>By <a href="#"><?php echo $work->getFirstName() , $work->getLastName() ?><!--Louise Elisabeth Lebrun--></a></p>
                    <div class="col-md-5">
                        <img src="images/works/medium/<?php echo $work->getImageFIleName() ?>.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat"/>
                    </div>
                    <div class="col-md-7">
                        <p>
                            <?php echo $work->getExcerpt() ?>
                             </p>
                        <p class="price"><?php echo $work->getCost()?></p>
                        <div class="btn-group">
                            <button class="btn btn-lg btn-default"><a href="#"><span class="glyphicon glyphicon-gift"></span> Add to Wish List</a></button>
                            <button class="btn btn-lg btn-default"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Shopping Cart</a></button>
                        </div>
                        <p>&nbsp;</p>
                         <div id="panel_negative">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     Product Details
                                </div>
                                <div class="panel-body">
                                    <div id="table_adjustment">
                                        <table class="table">
                                            <tr>
                                                <th>Date:</th>
                                                <td><?php echo $work->getYearOfWork()?></td>
                                            </tr>
                                            <tr>
                                                <th>Medium:</th>
                                                <td><?php echo $work->getMedium()?></td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions:</th>
                                                <td><?php echo $work->getWidth()?>cm x <?php echo $work->getHeight()?>cm</td>
                                            </tr>
                                            <tr>
                                                <th>Home:</th>
                                                <td><a href="#"><?php echo $work->getGalleryName()?>,<?php echo $work->getGalleryCity()?></a></td>
                                            </tr>
                                            <tr>
                                                <th>Genres:</th>
                                                <td>
                                                <?php
                                                OutputGenre();
                                                ?>
                                                <!--<td>
                                                    <a href="#">
                                                        </a>-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Subjects:</th>
                                                <td>
                                                    <?php
                                                    OutputSubject();
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <h3>Similar Products </h3>
<div class = "row fix">
<?php SimilarProducts(); ?>
</div>
<p> </p>
<h3> Reviews </h3>
<?php OutputReview(); ?>

<!--
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div  class="similarTitle">
                                <img class="thumbnail" src="images/thumbs/116010.jpg" alt="thumbnail" >
                                <div class="btn-group-xs">
                                    <p><a href="#">Artist Holding a Thistle</a></p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                    <button class="btn btn-success"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                    <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div  class="similarTitle">
                                <img class="thumbnail" src="images/thumbs/120010.jpg" alt="thumbnail1" >
                                <div class="btn-group-xs">
                                    <p><a href="#">Portrait of Eleanor of Toledo</a></p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                    <button class="btn btn-success"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                    <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>                   
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="similarTitle">
                                <img class="thumbnail" src="images/thumbs/107010.jpg" alt="thumbnail2" >
                                <div class="btn-group-xs">
                                    <p><a href="#">Madame de Pompadour</a></p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                    <button class="btn btn-success"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                    <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>                   
                    <div class="col-md-3"> 
                        <div class="thumbnail">
                            <div  class="similarTitle">
                                <img class="thumbnail" src="images/thumbs/106020.jpg" alt="thumbnail3" >
                                <div class="btn-group-xs">
                                    <p><a href="#">Girl with a Pearl Earring</a></p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                    <button class="btn btn-success"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                    <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
		
<?php include('includes/footer.inc.php'); ?>
