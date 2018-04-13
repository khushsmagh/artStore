<?php
Class Works{

    private $paintingID;
    private $imageFIleName;
    private $paintingTitle;
    private $description;
    private $excerpt;
    private $yearOfWork;
    private $width;
    private $height;
    private $medium;
    private $cost;
    private $artistID;
    private $firstName;
    private $lastName;
    private $galleryID;
    private $galleryName;
    private $galleryCity;


    function __construct($paintingID , $imageFileName , $paintingTitle ,
                         $description , $excerpt , $yearOfWork  ,$width , $height ,$medium , $cost ,  $artistID , $firstName , $lastName , $galleryID
    ,$galleryName , $galleryCity)
    {
        $this->paintingID = $paintingID;
        $this->imageFIleName = $imageFileName;
        $this->paintingTitle = $paintingTitle;
        $this->description = $description;
        $this->excerpt = $excerpt;
        $this->yearOfWork = $yearOfWork;
        $this->width = $width;
        $this->height = $height;
        $this->medium = $medium;
        $this->cost = $cost;
        $this->artistID = $artistID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->galleryID = $galleryID;
        $this->galleryName = $galleryName;
        $this->galleryCity = $galleryCity;
    }

    public function getPaintingID()
    {
        return $this->paintingID;
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
    public function getArtistID()
    {
        return $this->artistID;
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
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getGalleryID()
    {
        return $this->galleryID;
    }

    /**
     * @return mixed
     */
    public function getGalleryName()
    {
        return $this->galleryName;
    }

    /**
     * @return mixed
     */
    public function getGalleryCity()
    {
        return $this->galleryCity;
    }

}

?>