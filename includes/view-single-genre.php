<?php
include 'config.database.php';
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
            OutputSingleGenre($row);
        }
    }

    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

}

function OutputSingleGenre($row)
{
        echo '<div class = "col-md-3">';
        echo '<div class = "thumbnail">';
        echo '<img src="images/works/square-medium/'.$row['ImageFileName'].'.jpg" alt="1">';
        echo '<div class = "caption">';
        echo '<h4>';
        echo $row['Title'];
        echo '</h4>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
}

?>