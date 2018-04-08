<?php
include ('includes/view-single-genre.php');
include ('includes/header.inc.php');
?>
</div>
<div class = "container">
    <div class = "row">
        <?php
        OutputSingleGenre();
        ?>
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
                                <p class="media-body"><a href="#">Self-portrait in a Straw Hat</a></p>
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
