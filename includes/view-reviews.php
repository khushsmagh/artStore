<?php
require_once ('config.database.php');
include ('view-reviews.class.php');
function ViewReviews()
{
    try {
        if (isset($_GET['PaintingID']))
        {
            $getPaintingID = $_GET['PaintingID'];
        }
        else
        {
            $getPaintingID = 437;
        }
        $connection = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select *  from reviews
             where PaintingID = $getPaintingID ";
        $result = $connection->query($sql);
        while($row = $result->fetch()) {
            $arev = new Review($row['RatingID'], $row['PaintingID'], $row['ReviewDate'], $row['Rating'], $row['Comment']);
            $rev[] = $arev;
        }
        return $rev;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function OutputReview()
{
    $rev = ViewReviews();
    foreach ($rev as $showrev)
    {
        echo '<p>'.$showrev->getReviewdate().' '.$showrev->getRating().' '.$showrev->getComment().' </p>';
    }
}

?>