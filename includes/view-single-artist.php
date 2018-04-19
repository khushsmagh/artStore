<?php
require_once('includes/painting.class.php');

include ('config.database.php');
include ('single-artist.class.php');
include ('single-artist-painting.class.php');
function ViewSingleArtist()
{
    try {
        $getArtistID = $_GET['ArtistID'];
        $connection = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "Select * from artists Where ArtistID = $getArtistID";
        $query = $connection->query($sql);
        $row = $query->fetch();
        $artist = new SingleArtist($row['ArtistID'] , $row['FirstName'] , $row['LastName'] , $row['Nationality'] , $row['Gender'] , $row['YearOfBirth'] , $row['YearOfDeath'] , $row['Details'] , $row['ArtistLink']);
        return $artist;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function ViewArtistPainting()
{

    try {
        $getArtistID = $_GET['ArtistID'];
        $connection = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select * from paintings Where ArtistID = $getArtistID";
        $query = $connection->query($sql);
        while ($row = $query->fetch()) {
            $apainting = new SingleArtistPainting($row['PaintingID'], $row['ArtistID'], $row['ImageFileName'], $row['Title'], $row['ShapeID'], $row['Description'], $row['Excerpt'],
                $row['YearOfWork'], $row['Width'], $row['Height'], $row['Medium'], $row['Cost']);
            $painting[] = $apainting;
        }
        return $painting;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


function OutputArtistPainting()
{
    $getpainting = ViewArtistPainting();
    foreach ($getpainting as $showpainting) {
		$painting = new Painting($showpainting->getPaintingID());
		$painting->outputThumbnail();
    }
}
?>