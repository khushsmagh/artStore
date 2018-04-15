<?php
Class ShowIndex{
    private $sales;
    private $artistID;
    private $lastName;
    private $firstName;
    private $imageFileName;
    private $painitngID;
    private $title;
    private $description;
    private $excerpt;

    function __construct($sales , $artistID , $lastName , $firstName , $imageFileName , $paintingID , $title , $description , $excerpt)
    {
        $this->sales = $sales;
        $this->artistID = $artistID;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->imageFileName = $imageFileName;
        $this->painitngID = $paintingID;
        $this->title = $title;
        $this->description = $description;
        $this->excerpt = $excerpt;
    }

    /**
     * @return mixed
     */
    public function getSales()
    {
        return $this->sales;
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
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getImageFileName()
    {
        return $this->imageFileName;
    }

    /**
     * @return mixed
     */
    public function getPainitngID()
    {
        return $this->painitngID;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
}
;
?>