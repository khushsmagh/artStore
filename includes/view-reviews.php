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
		$rev = 0;
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
    if(is_array($rev)){
	foreach ($rev as $showrev)
    {
        $count = 0;
        echo '
<div class="col-md-8">';
        while ($count < $showrev->getRating())
        {
echo'<span class="fa fa-star starclick"></span>';
$count =  $count + 1;
}

echo'<div >'.$showrev->getReviewdate().'</div>
<div class="col-md-8">'.$showrev->getComment().'</div>
<div class="col-md-5">
<a href="includes/view-delete-review.php?RatingID='.$showrev->getRatingID().'">
    <button class="btn btn-danger btn-xs" type="submit">Delete</button>
    </a>
    </div>
    </div>';
    }}
}

?>