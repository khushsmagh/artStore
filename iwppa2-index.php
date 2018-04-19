<?php
include ('includes/view-index.php');
$pageTitle = 'Page Title';
include ('includes/header.inc.php');
?>
</div>
        <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php OutputIndex(); ?>
            </div>
            <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">previous</span>
            </a>
            <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">next</span>
            </a>
        </div>
        <div class="container marketing">
            <div class="row">
                <div id="marketing-button">
                    <div class="row fix">
                    <?php Thumbnail();?>
                    </div>
                </div>
            </div>
        </div>

        <script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
        <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    </body>
</html>