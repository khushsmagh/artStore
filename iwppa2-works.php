<?php 
$pageTitle = 'Detail page';
include('includes/header.inc.php'); 

$sql = "select *  from paintings 
JOIN artists ON artists.ArtistID = paintings.ArtistID
JOIN  galleries ON galleries.GalleryID = paintings.GalleryID
JOIN  paintinggenres ON paintinggenres.PaintingID = paintings.PaintingID
JOIN  genres ON genres.GenreID = paintinggenres.GenreID
 where YearOfWork = 1782";
$result = $connection->query($sql);
$row = $result->fetch();
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
		
<?php include('includes/footer.inc.php'); ?>
