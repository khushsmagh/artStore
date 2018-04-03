<?php
include 'config.database.php';
function ViewSingleArtist()
{
    try {
        $connection = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $GetArtistID = $_GET['ArtistID'];
        $sql = "Select *  , CONCAT(FirstName , ' ', LastName) AS Name from artists Where ArtistID = $GetArtistID";
        $query = $connection->query($sql);
        $row = $query->fetch();
        return $row;
    } catch (PDOException $e) {

    }
}
?>