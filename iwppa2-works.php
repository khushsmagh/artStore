<?php
include 'includes/config.database.php';

//$bookRegister = $connection->query('SELECT * FROM paintings where YearOfWork = 1782')->fetchAll(PDO::FETCH_OBJ);
$sql = "select *  from paintings 
JOIN artists ON artists.ArtistID = paintings.ArtistID
JOIN  galleries ON galleries.GalleryID = paintings.GalleryID
JOIN  paintinggenres ON paintinggenres.PaintingID = paintings.PaintingID
JOIN  genres ON genres.GenreID = paintinggenres.GenreID
 where YearOfWork = 1782";
$result = $connection->query($sql);
$row = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>WIP - Assignment 1</title>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
        <link href="iwppa1.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="topHeaderRow" >
                <div class="container">
                    <nav class="navbar navbar-default navbar-inverse">
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navbar-1">
                                <div id="nav_inversed">
                                    <p class="navbar-brand">Welcome to the Art Store,<a href="includes/login-form.php"> Login</a> or <a href="includes/register-user.form.php"> Create an account</a></p>
                                    <?php if(isset($_SESSION['CustId'])){
                                            echo '<form action="includes/logout.php" method="POST">
                                            <button class="btn btn-success" type="submit" name="submit">Logout</button>
                                        </form>';
                                        } ?>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="my-account.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                                        <li><a href="view-favorites-list.php"><span class="glyphicon glyphicon-gift"></span> Wish List</a></li>
                                        <li><a href="view-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-arrow-right"></span> Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>   <!-- end topHeaderRow -->
            <div class="container">
                <div id="logoRow" >
                    <div class="main row">
                        <h1 class="col-md-8">Art Store</h1>
                        <form action="http://www.randyconnolly.com/tests/process.php" method="post" class="col-md-3">
                            <div class="input-group">
                                <input class="form-control" type="text"  placeholder="Search" name="search">
                                    <div class="input-group-btn">
                                         <button class="btn btn-default"  type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                            </div>
                        </form>
     
                    </div>
                </div>

            </div>  <!-- end logoRow -->
            <div id="mainNavigationRow" >
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navbar-2">
                                <ul class="nav navbar-nav">
                                    <li ><a href="iwppa2-index.php">Home</a></li>
                                    <li class="active"><a href="#">About Us</a></li>
                                    <li> <a href="iwppa2-works.php">Advanced Search</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Browse <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="iwppa2-works.php">Art Works</a></li>
                                            <li><a href="iwppa2-artists.php">Artists</a></li>
                                            <li><a href = "genres.php">Genres</a></li>
                                            <li><a href ="iwppa2-works.php">Subjects</a></li>
                                        </ul>
                                </ul> 
                            </div>             
                        </div>
                    </nav>
                </div>
            </div>  <!-- end mainNavigationRow -->
        </header>

        <div class="container">
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
                <?php
                ?>
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
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4><span class="glyphicon glyphicon-info-sign"></span> About Us</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <div id="footer_adjustment">
                        <div class="col-md-3">
                            <h4><span class="glyphicon glyphicon-earphone"></span> Customer Service</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                            </ul>  
                        </div>         
                        <div class="col-md-3">
                            <h4><span class="glyphicon glyphicon-shopping-cart"></span> Just Ordered</h4>
                            <div class="media">
                                <a class="pull-left"  href="#">
                                <img class="media-object" src="images/tiny/13030.jpg" alt="cart">
                                </a>
                                <p class="media-body"> <a href="#">Arrangement in Grey and Black</a></p>
                                <em>5 minutes ago</em>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object"  src="images/tiny/116010.jpg" alt="cart2">
                                </a>
                                <p class="media-body"><a href="#">Artist Holding a Thistle</a></p>
                                <em>11 minutes ago</em>
                            </div>   
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/tiny/113010.jpg" alt="cart3">
                                </a>
                                <p class="media-body" class="similarTitle"><a href="#">Self-portrait in a Straw Hat</a></p>
                                <em>23 minutes ago</em>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4><span class="glyphicon glyphicon-envelope"></span> Contact us</h4>
                        <div class="tight-form-group">
                            <form action="http://www.randyconnolly.com/tests/process.php" method="post">
                                <input class="form-control" type="text" name="email" placeholder="Enter name ...">
                                <input class="form-control" type="email"  name="email" placeholder="Enter email ...">
                                <textarea class="form-control"  rows="3" placeholder="Enter message ..."></textarea>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
            <div id="copyrightRow">
                <p>All images are copyright to their owners. This is just a hypothetical site
                <span class="pull-right" >&copy; 2014 Copyright Art Store</span></p>
            </div>
        </footer>
        <script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
        <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    </body>
</html>
