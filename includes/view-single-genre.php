<?php
require_once('includes/painting.class.php');

include ('config.database.php');
include ('single-genre.class.php');
function ViewSingleGenre()
{
    try {
        $getGenre = $_GET['GenreID'];
        $connection = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select * from paintings 
Join paintinggenres ON paintinggenres.PaintingID = paintings.PaintingID
JOIN  genres ON genres.GenreID = paintinggenres.GenreID
where genres.GenreID =  $getGenre";
        $query = $connection->query($sql);
        while($row = $query->fetch()){
            //OutputSingleGenre($row);
            $agenre = new SingleGenre($row['PaintingID'] , $row['ArtistID'] , $row['ImageFileName'] , $row['Title'] , $row['Description'] , $row['Excerpt'] ,
                $row['YearOfWork'] , $row['Width'] , $row['Height'] , $row['Medium'] , $row['Cost'] , $row['GenreID'] , $row['GenreName']);
            $genre[] = $agenre;
        }
        return $genre;
    }

    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

}

function OutputSingleGenre()
{
    $getgenre = ViewSingleGenre();
    foreach ($getgenre as $genredetails) {
		$painting = new Painting($genredetails->getPaintingID());
		$painting->outputThumbnail();
    }
}

?>