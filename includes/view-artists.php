<?php
require_once('includes/config.database.php');
include ('artists.class.php');

function artistsinfo()
{
    try {
        $connection = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select count(OrderID) AS Sales, paintings.ArtistID AS Artist , FirstName , LastName from paintings
JOIN orderdetails On orderdetails.PaintingID = paintings.PaintingID
JOIN artists ON artists.ArtistID = paintings.ArtistID
Group BY Artist
Order BY Sales DESC
LIMIT 12 ";
        $query = $connection->query($sql);
        while ($row = $query->fetch()) {
        $aartist = new Artists($row['Sales'] , $row['Artist'] ,$row['FirstName'] , $row['LastName']);
        $artist[] = $aartist;
        }
        return $artist;
    }

    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

}
function OutputArtist()
{
    $getartist = artistsinfo();
    foreach ($getartist as $showartist) {

        echo '<div class="col-md-3">';
        echo '<div class="thumbnail">';
        echo '<a href = "single-artist.php?ArtistID=' . $showartist->getArtist() . '" ><img src="images/artists/square-medium/' . $showartist->getArtist() . '.jpg" alt="1"></a>';
        echo '<div class="caption">';
        echo ' <h5>';
        echo $showartist->getFirstname();
        echo ' ';
        echo $showartist->getLastname();
        echo '</h5>';
        echo '<button class="btn btn-info">';
        echo '<span class="glyphicon glyphicon-fire">';
        echo '</span> Sales <span
        class="badge">';
        echo $showartist->getSales();
        echo ' </span>';
        echo '</button>';
        echo '</div>';
        echo ' </div>';
        echo ' </div>';
    }
}
?>