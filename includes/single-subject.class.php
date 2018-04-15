<?php
Class SingleSubject{

    private $paintingID;
    private $artistID;
    private $imageFIleName;
    private $paintingTitle;
    private $description;
    private $excerpt;
    private $yearOfWork;
    private $width;
    private $height;
    private $medium;
    private $cost;
    private $subjectID;
    private $subjectName;

    function __construct($paintingID , $artistID , $imageFileName , $paintingTitle ,
$description , $excerpt , $yearOfWork  ,$width , $height ,$medium , $cost , $subjectID , $subjectName )
    {
    $this->paintingID = $paintingID;
    $this->artistID = $artistID;
    $this->imageFIleName = $imageFileName;
    $this->paintingTitle = $paintingTitle;
    $this->description = $description;
    $this->excerpt = $excerpt;
    $this->yearOfWork = $yearOfWork;
    $this->width = $width;
    $this->height = $height;
    $this->medium = $medium;
    $this->cost = $cost;
    $this->subjectID = $subjectID;
    $this->subjectName = $subjectName;
    }

    public function getPaintingID()
    {
        return $this->paintingID;
    }

    /**
     * @return mixed
     */
    public function getArtistID()
    {
        return $this->artistID;
    }

    /**
     * @return mixed
     */
    public function getImageFIleName()
    {
        return $this->imageFIleName;
    }

    /**
     * @return mixed
     */
    public function getPaintingTitle()
    {
        return $this->paintingTitle;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * @return mixed
     */
    public function getYearOfWork()
    {
        return $this->yearOfWork;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
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