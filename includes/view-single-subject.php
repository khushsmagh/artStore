<?php
include ('config.database.php');
include ('single-subject.class.php');
function ViewSingleSubject()
{
        try {
            $getSubject = $_GET['SubjectID'];
            $connection = new PDO(DBCONNSTRING,DBUSER,DBPASS);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "select * from paintings 
Join paintingsubjects ON paintingsubjects.PaintingID = paintings.PaintingID
JOIN subjects ON subjects.SubjectID = paintingsubjects.SubjectID
where subjects.SubjectID =  $getSubject";
            $query = $connection->query($sql);
            while($row = $query->fetch()){
                $asubjectdetails = new SingleSubject($row['PaintingID'] , $row['ArtistID'] , $row['ImageFileName'] , $row['Title'] , $row['Description'] , $row['Excerpt'] ,
                    $row['YearOfWork'] , $row['Width'] , $row['Height'] , $row['Medium'] , $row['Cost'] , $row['SubjectID'] , $row['SubjectName']);
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
                <a href="iwppa2-works.php?PaintingID='.$subject->getPaintingID().'" ><img src="images/works/square-medium/'.$subject->getImageFIleName().'.jpg" alt="1"></a>
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