<?php
require_once('includes/config.database.php');

function artistsinfo()
{
    try {
        $connection = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select count(OrderID) AS Sales, paintings.ArtistID , artists.LastName from paintings
JOIN orderdetails On orderdetails.PaintingID = paintings.PaintingID
JOIN artists ON artists.ArtistID = paintings.ArtistID
Group BY ArtistID
Order BY Sales DESC
LIMIT 12 ";
        $query = $connection->query($sql);
        while ($row = $query->fetch()) {
            OutputArtist($row);
        }
    }

    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

}
function OutputArtist($row)
{
    echo '<div class="col-md-2">';
    echo '<div class="thumbnail">';
    echo '<a href = "single-artist.php?ArtistID='.$row['ArtistID'] . '" ><img src="images/artists/square-medium/'.$row['ArtistID'].'.jpg" alt="1"></a>';
    echo '<div class="caption">';
    echo ' <h4>';
    echo $row['LastName'];
    echo '</h4>';
    echo '<button class="btn btn-info">';
    echo '<span class="glyphicon glyphicon-fire">';
    echo '</span> Sales <span
        class="badge">';
    echo $row['Sales'];
    echo ' </span>';
    echo '</button>';
    echo '</div>';
    echo ' </div>';
    echo ' </div>';
}
?>