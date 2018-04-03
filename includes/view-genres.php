<?php
include 'config.database.php';
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
            OutputGenres($row);
        }
    }

    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

}

function OutputGenres($row)
{
    echo '<div class = "col-md-3">';
    echo '<div class = "thumbnail">';
    echo '<a href = "single-genre.php?GenreID='.$row['GenreID'].'" ><img src="images/genres/square-medium/'.$row['GenreID'].'.jpg" alt="1"></a>';
    echo '<div class = "caption">';
     echo '<h4>';
     echo $row['GenreName'];
     echo '</h4>';
     echo '</div>';
      echo '</div>';
      echo '</div>';
}
?>