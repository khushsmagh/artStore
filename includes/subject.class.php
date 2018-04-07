<?php
Class Subjects{
private $subjectID;
private $subjectName;

    function __construct($subjectID , $subjectName)
{
    $this->subjectID = $subjectID;
    $this->subjectName = $subjectName;
}

    /**
     * @return mixed
     */
    public function getSubjectID()
    {
        return $this->subjectID;
    }

    /**
     * @return mixed
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    public function __toString()
    {
        return '
          <div class = "col-md-3">
          <div class = "thumbnail">
        <a href = "single-subject.php?SubjectID='.$this->subjectID.'" ><img src="images/subjects/square-medium/'.$this->subjectID.'.jpg" alt="1"></a>
        <div class = "caption">
        <h4>
        '.$this->subjectName.'
        </h4>
        </div>
        </div>
        </div>
        
        ';
    }
}

?>