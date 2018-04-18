<?php

require_once ('config.database.php');
include ('view-reviews.class.php');

    try {
        if (isset($_POST['star']))
        {
            $star = $_POST['star'];
        }
        else {
            $star = 0;
        }

        $getPaintingID = $_GET['PaintingID'];
        $comment = $_POST['comment'];
        print_r($comment);
        print_r($getPaintingID);
        $connection = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "insert into reviews (PaintingID , ReviewDate , Rating , Comment) VALUES ($getPaintingID, NOW() , $star , '$comment');";
        $result = $connection->prepare($sql);
        $result->execute();
        header("Location:../iwppa2-works.php?PaintingID=".$getPaintingID."");



    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


?>



?>

