<?php
include 'config.database.php';
function ViewSubjects()
{
    try {
        $connection = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "Select * from subjects ";
        $query = $connection->query($sql);
        while ($row = $query->fetch()) {
            OutputSubjects($row);
        }
    }

    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

}

function OutputSubjects($row)
{
    echo '<div class = "col-md-3">';
    echo '<div class = "thumbnail">';
    echo '<a href = "single-subject.php?SubjectID='.$row['SubjectID'].'" ><img src="images/subjects/square-medium/'.$row['SubjectID'].'.jpg" alt="1"></a>';
    echo '<div class = "caption">';
    echo '<h4>';
    echo $row['SubjectName'];
    echo '</h4>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>