<?php
include 'config.database.php';
include 'single-subject.class.php';
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
                $asubjectdetails = new SingleSubject($row['PaintingID'] , $row['ArtistID'] , $row['ImageFileName'] , $row['Title'] , $row['Description'] , $row['Excerpt'] ,
                    $row['YearOfWork'] , $row['Width'] , $row['Height'] , $row['Medium'] , $row['Cost'] , $row['SubjectID']);
               // OutputSingleSubject($row);
               $subjectdetails[] = $asubjectdetails;
            }
            return $subjectdetails;
        }

        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }

}
function OutputSingleSubject()
{
    $getsubject = ViewSingleSubject();
    foreach ($getsubject as $subject)
    {
        echo '<div class = "col-md-3">
                <div class = "thumbnail">
                <img src="images/works/square-medium/'.$subject->getImageFIleName().'.jpg" alt="1">
                <div class = "caption">
                <h4>
    '.$subject->getPaintingTitle().'
                </h4>
                </div>
                </div>
                </div>';
    }
}
?>