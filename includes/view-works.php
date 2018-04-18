<?php
require_once('includes/painting.class.php');

include ('config.database.php');
include ('single-genre.class.php');
include ('view-works.class.php');
include ('single-subject.class.php');

function ViewWorks()
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
        $sql = "select *  from paintings 
            JOIN artists ON artists.ArtistID = paintings.ArtistID
            JOIN  galleries ON galleries.GalleryID = paintings.GalleryID
             where paintings.PaintingID = $getPaintingID ";
        $result = $connection->query($sql);
        $row = $result->fetch();
        $work = new Works($row['PaintingID'] ,  $row['ImageFileName'] , $row['Title'] , $row['Description'] , $row['Excerpt'] ,
            $row['YearOfWork'] , $row['Width'] , $row['Height'] , $row['Medium'] , $row['Cost'] ,$row['ArtistID'] , $row['FirstName'] ,$row['LastName'],$row['GalleryID'] , $row['GalleryName'] , $row['GalleryCity']);
        return $work;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function ViewGenres()
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
    $sql = "select *  from paintings 
JOIN  paintinggenres ON paintinggenres.PaintingID = paintings.PaintingID
JOIN  genres ON genres.GenreID = paintinggenres.GenreID
 where paintings.PaintingID = $getPaintingID ";
    $result = $connection->query($sql);
    while ($row = $result->fetch()) {
        $agenre = new SingleGenre($row['PaintingID'], $row['ArtistID'], $row['ImageFileName'], $row['Title'], $row['Description'], $row['Excerpt'],
            $row['YearOfWork'], $row['Width'], $row['Height'], $row['Medium'], $row['Cost'], $row['GenreID'], $row['GenreName']);
        $genre[] = $agenre;
    }
    return $genre;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function OutputGenre()
{
    $genre = ViewGenres();
    foreach ($genre as $showgenre){

        echo '<a href="single-genre.php?GenreID='.$showgenre->getGenreID().'"> ';
         echo $showgenre->getGenreName();
         echo '</a>,';
    }
}

function ViewSubject()
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
        $sql = "select *  from paintings 
JOIN  paintingsubjects ON paintingsubjects.PaintingID = paintings.PaintingID
JOIN  subjects ON subjects.SubjectID = paintingsubjects.SubjectID
 where paintings.PaintingID = $getPaintingID ";
        $result = $connection->query($sql);
        while ($row = $result->fetch()) {
            $asubject = new SingleSubject($row['PaintingID'] , $row['ArtistID'] , $row['ImageFileName'] , $row['Title'] , $row['Description'] , $row['Excerpt'] ,
                $row['YearOfWork'] , $row['Width'] , $row['Height'] , $row['Medium'] , $row['Cost'] , $row['SubjectID'] , $row['SubjectName']);
            $subject[] = $asubject;
        }
        return $subject;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function OutputSubject()
{
    $subject = ViewSubject();
    foreach ($subject as $showsubject)
    {
        echo '<a href="single-subject.php?SubjectID='.$showsubject->getSubjectID().'"> ';
        echo $showsubject->getSubjectName();
        echo '</a>,';
    }
}
function Product()
{
    try {
        $subject = ViewSubject();
        foreach ($subject as $getsubject)
        {
            $showsubject = $getsubject->getSubjectID();
        }
        $connection = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select *  from paintings 
JOIN  paintingsubjects ON paintingsubjects.PaintingID = paintings.PaintingID
JOIN  subjects ON subjects.SubjectID = paintingsubjects.SubjectID 
where subjects.SubjectID = $showsubject
ORDER BY RAND()
        LIMIT 4";
        $result = $connection->query($sql);
        while ($row = $result->fetch()) {
            $aproduct = new SingleSubject($row['PaintingID'] , $row['ArtistID'] , $row['ImageFileName'] , $row['Title'] , $row['Description'] , $row['Excerpt'] ,
                $row['YearOfWork'] , $row['Width'] , $row['Height'] , $row['Medium'] , $row['Cost'] , $row['SubjectID'] , $row['SubjectName']);
            $product[] = $aproduct;
        }
        return $product;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
function SimilarProducts()
{
    $product = Product();
    foreach($product as $showproduct)
    {
	$painting = new Painting($showproduct->getPaintingID());
	$painting->outputThumbnail();
    }
}

?>