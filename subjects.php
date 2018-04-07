<?php
include ('includes/view-subject.php');
include ('includes/header.inc.php');
?>
<div class="container">
            <h2>Subjects</h2>
</div>
</div>
<div class = "container">
    <div class = "row">
        <?php
        $row = ViewSubjects();
        foreach ($row as $subjects)
        {
            echo $subjects;
        }
        ?>
    </div>
</div>
</div>
</div>
<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>