<?php
$pageTitle = 'Detail page';
include ('includes/view-works.php');
include ('includes/view-reviews.php');
include('includes/header.inc.php');
$work = ViewWorks();
?>
<link href="bootstrap-3.2.0-dist/css/Common.css" type="text/css" rel="stylesheet">
<div class="container">
    <div class="row favorite">
        <div>
            <div class="col-md-3">
                <img src="images/tiny/13030.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat"/>
            </div>
            <div class="col-md-7">
                <p>
                    <a href="#"><?php echo $work->getFirstName() , $work->getLastName() ?><!--Louise Elisabeth Lebrun--></a>
                </p>
                <p class="price"><?php echo $work->getCost()?></p>
                <div class="btn-group">
                    <button class="btn btn-xs btn-default"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Shopping Cart</a></button>
                </div>
            </div>
        </div>
        <hr class="col-md-11">
        <div>
            <div class="col-md-3">
                <img src="images/tiny/13030.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat"/>
            </div>
            <div class="col-md-7">
                <p>
                    <a href="#"><?php echo $work->getFirstName() , $work->getLastName() ?><!--Louise Elisabeth Lebrun--></a>
                </p>
                <p class="price"><?php echo $work->getCost()?></p>
                <div class="btn-group">
                    <button class="btn btn-xs btn-default"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Shopping Cart</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.inc.php");?>
