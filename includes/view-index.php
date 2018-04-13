<?php
include ('config.database.php');
include ('index.class.php');
function ViewIndex()
{
    try {
        $connection = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select count(OrderID) AS Sales, paintings.ArtistID , artists.LastName , artists.Firstname , ImageFileName , paintings.PaintingID , Title , Description , Excerpt from paintings
JOIN orderdetails On orderdetails.PaintingID = paintings.PaintingID
JOIN artists ON artists.ArtistID = paintings.ArtistID
Group BY ArtistID
Order BY RAND()
LIMIT 3";
        $query = $connection->query($sql);
        while($row = $query->fetch()) {
            $aindex = new ShowIndex($row['Sales'], $row['ArtistID'], $row['LastName'], $row['Firstname'], $row['ImageFileName'], $row['PaintingID'],
                $row['Title'], $row['Description'], $row['Excerpt']);
            $index[] = $aindex;
        }
        return $index;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function OutputIndex()
{
    $index = ViewIndex();
    $count = 0;
    foreach ($index as $showindex)
    {
        if ($count == 0)
        {
           echo '<div class="item active">
                    <img class="first-slide" src="images/works/large/'.$showindex->getImageFileName().'.jpg" alt="first slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>'.$showindex->getFirstName().' '.$showindex->getLastName().'</h1>
                            <p>'.$showindex->getTitle().'</p>
                            <button class="btn btn-primary"> Learn More</button>
                        </div>
                    </div>
                </div>';
        }

        else {
            echo '<div class="item">
                    <img class="second-slide" src="images/works/large/'.$showindex->getImageFileName().'.jpg" alt="slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>'.$showindex->getFirstName().' '.$showindex->getLastName().'</h1>
                            <p>'.$showindex->getTitle().'</p>
                            <button class="btn btn-primary"> Learn More</button>
                        </div>
                    </div>
                </div>';
        }
        $count = $count + 1;
    }
}
function Thumbnail()
{
    $thumb = ViewIndex();
    foreach ($thumb as $showthumb) {
        echo '<div class="col-lg-4">
                        <img class="img-circle" src="images/works/square-medium/'.$showthumb->getImageFileName().'.jpg" alt="portrait 1" width="100" height="100">
                        <h3>'.$showthumb->getTitle().'</h3>
                        <p class="text-justify">'.$showthumb->getDescription().'</p>
                        <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
                    </div>';
    }
}
?>