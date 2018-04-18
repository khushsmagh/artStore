<?php
require_once ('config.database.php');
include ('view-reviews.class.php');

    try {
        $getRatingID = $_GET['RatingID'];
        $connection = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sqlPainting = "Select * from reviews
        where RatingID = $getRatingID";
        $resultexe = $connection->query($sqlPainting);
        $rev = array();
        while ($fetchPainting = $resultexe->fetch()){
        $arev = new Review($fetchPainting['RatingID'], $fetchPainting['PaintingID'], $fetchPainting['ReviewDate'], $fetchPainting['Rating'], $fetchPainting['Comment']);
        $rev[] = $arev;
    }
        $sql = "Delete from reviews
           where RatingID = $getRatingID";
        $result = $connection->prepare($sql);
        $result->execute();
        header("Location:../iwppa2-works.php?PaintingID=".$rev[0]->getPaintingID()."");



    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


?>