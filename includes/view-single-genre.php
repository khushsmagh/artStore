<?php
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
where GenreID =  $getGenre";
        $query = $connection->query($sql);
        while($row = $query->fetch()){
            //OutputSingleGenre($row);
            $agenre = new SingleGenre($row['PaintingID'] , $row['ArtistID'] , $row['ImageFileName'] , $row['Title'] , $row['Description'] , $row['Excerpt'] ,
                $row['YearOfWork'] , $row['Width'] , $row['Height'] , $row['Medium'] , $row['Cost'] , $row['GenreID']);
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
        echo '<div class = "col-md-3">';
        echo '<div class = "thumbnail">';
        echo '<img src="images/works/square-medium/' . $genredetails->getImageFIleName() . '.jpg" alt="1">';
        echo '<div class = "caption">';
        echo '<h4>';
        echo $genredetails->getPaintingTitle();
        echo '</h4>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

?>