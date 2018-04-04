<?php
include 'includes/view-subject.php';
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
<div class="container">
    <header>
        <div id = "topHeaderRow">
            <h2>Subjects</h2>
        </div>
    </header>
</div>

</div>
<div class = "container">
    <div class = "row">
        <?php
        ViewSubjects();
        ?>
    </div>
</div>
</div>
</body>
</html>