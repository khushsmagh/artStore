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
}

?>