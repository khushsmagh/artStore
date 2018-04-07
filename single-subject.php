<?php
include ('includes/view-single-subject.php');
include ('includes/header.inc.php');
?>
    <div class = "container">
        <div class = "row">
            <?php
            $row = ViewSingleSubject();
            foreach ($row as $subject){
                echo $subject;
            }
                ?>
                <!--<div class = "col-md-3">
                <div class = "thumbnail">
                <img src="images/works/square-medium/<?php //echo $value ?>.jpg" alt="1">
                <div class = "caption">
                <h6>
                $value['Title']
                </h6>
                </div>
                </div>
                </div>-->
        </div>
    </div>
</div>
<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
