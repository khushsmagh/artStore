<?php include('includes/header.inc.php'); ?>

<?php
$sql = "select *  from paintings 
JOIN artists ON artists.ArtistID = paintings.ArtistID
JOIN  galleries ON galleries.GalleryID = paintings.GalleryID
JOIN  paintinggenres ON paintinggenres.PaintingID = paintings.PaintingID
JOIN  genres ON genres.GenreID = paintinggenres.GenreID
 where YearOfWork = 1782";
$result = $connection->query($sql);
$row = $result->fetch();
?>
        <div class="container"> <!-- main content container -->
            <div class="main row">
                <div class="col-md-10">
                    <?php
                    ?>
                    <h2><?php echo $row['Title'] ?></h2>

                    <p>By <a href="#"><?php echo $row['FirstName'] , $row['LastName'] ?><!--Louise Elisabeth Lebrun--></a></p>
                    <div class="col-md-5">
                        <img src="images/<?php echo $row['ImageFileName'] ?>.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat"/>
                    </div> 
                    <div class="col-md-7">
                        <p>
                            <?php echo $row['Excerpt'] ?>
                             </p>
                        <p class="price"><?php echo $row['Cost']?></p>
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
                                                <td><?php echo $row['YearOfWork']?></td>
                                            </tr>
                                            <tr>
                                                <th>Medium:</th>
                                                <td><?php echo $row['Medium']?></td>
                                            </tr>  
                                            <tr>
                                                <th>Dimensions:</th>
                                                <td><?php echo $row['Width']?>cm x <?php echo $row['Height']?>cm</td>
                                            </tr> 
                                            <tr>
                                                <th>Home:</th>
                                                <td><a href="#"><?php echo $row['GalleryName']?>,<?php echo $row['GalleryCity']?></a></td>
                                            </tr>  
                                            <tr>
                                                <th>Genres:</th>
                                                <td><a href="#"><?php echo $row['GenreName']?>Realism</a>, <a href="#">Rococo</a></td>
                                            </tr> 
                                            <tr>
                                                <th>Subjects:</th>
                                                <td><a href="#">People</a>, <a href="#">Arts</a></td>
                                            </tr>     
                                        </table>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <h3>Similar Products </h3> 
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
                </div>
                <!--panels-->
                <div class="col-md-2">
                    <div id="panel_adjustment1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 >Cart </h3>
                            </div>
                            <div class="panel-body">
                                <div class="media">
                                    <a href="#" class="pull-left">
                                    <img class="media-object"  src="images/tiny/116010.jpg" alt="media" width="32">
                                    </a>
                                    <div class="media-body">
                                        <p ><a href="#">Artist Holding a Thistle</a></p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                    <img class="media-object" src="images/tiny/113010.jpg" class="media-object" alt="media object" width="32">
                                    </a>
                                    <div class="media-body">
                                        <p ><a href="#">Self-portrait in a Straw Hat</a></p>
                                    </div>
                                </div>
                                <strong class="cartText">Subtotal:</strong> <span > $1200 </span>
                                <div class="btn-group-xs">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-info-sign"></span> Edit</button>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> Checkout</button>  
                                </div>
        
                            </div>
                        </div>
                    </div>
                    <div id="panel_adjustment2">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 >Popular Artists</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li><a href="#">Caravaggio</a></li>
                                    <li><a href="#">Cezanne</a></li>
                                    <li><a href="#">Matisse</a></li>
                                    <li><a href="#">Michelangelo</a></li>
                                    <li><a href="#">Picasso</a></li>
                                    <li><a href="#">Raphael</a></li>
                                    <li><a href="#">Van Gogh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel_adjustment3">  
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 >Popular Genres</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li><a href="#">Baroque</a></li>
                                    <li><a href="#">Cubism</a></li>
                                    <li><a href="#">Impressionism</a></li>
                                    <li><a href="#">Renaissance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end main content container -->
		
<?php include('includes/footer.inc.php'); ?>
