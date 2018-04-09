<?php
include ('config.database.php');
include ('genres.class.php');
function ViewGenres()
{
    try {
        $connection = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "Select * from genres
ORDER BY EraID ASC , GenreName ASC ";
        $query = $connection->query($sql);
        while ($row = $query->fetch()) {
            $agenres = new Genres($row['GenreID'] , $row['GenreName'] , $row['EraID'] , $row['Description'] , $row['Link']);
            //OutputGenres($row);
            $genres[] = $agenres;
        }
        return $genres;
    }

    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

}

function OutputGenres()
{
    $showgenres = ViewGenres();
    foreach ($showgenres as $gen)
    {
        echo '<div class = "col-md-3">';
        echo '<div class = "thumbnail">';
        echo '<a href = "single-genre.php?GenreID='.$gen->getGenreID().'" ><img src="images/genres/square-medium/'.$gen->getGenreID().'.jpg" alt="1"></a>';
        echo '<div class = "caption">';
        echo '<h4>';
        echo $gen->getGenreName();
        echo '</h4>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

}
?>