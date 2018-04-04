<?php
include 'config.database.php';
function ViewSingleSubject()
{
        try {
            $getSubject = $_GET['SubjectID'];
            $connection = new PDO(DBCONNSTRING,DBUSER,DBPASS);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "select * from paintings 
Join paintingsubjects ON paintingsubjects.PaintingID = paintings.PaintingID
where SubjectID =  $getSubject";
            $query = $connection->query($sql);
            while($row = $query->fetch()){
                OutputSingleSubject($row);
            }
        }

        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
}
function OutputSingleSubject($row)
{
    echo '<div class = "col-md-3">';
    echo '<div class = "thumbnail">';
    echo '<img src="images/works/square-medium/' . $row['ImageFileName'] . '.jpg" alt="1">';
    echo '<div class = "caption">';
    echo '<h6>';
    echo $row['Title'];
    echo '</h6>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>