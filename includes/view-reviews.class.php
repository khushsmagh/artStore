<?php
Class Review{
private $ratingID;
private $paintingID;
private $reviewdate;
private $rating;
private $comment;

function __construct($ratingID , $paintingID , $reviewDate , $rating , $comment)
{
    $this->ratingID = $ratingID;
    $this->paintingID = $paintingID;
    $this->reviewdate = $reviewDate;
    $this->rating = $rating;
    $this->comment = $comment;
}

    /**
     * @return mixed
     */
    public function getRatingID()
    {
        return $this->ratingID;
    }

    /**
     * @return mixed
     */
    public function getPaintingID()
    {
        return $this->paintingID;
    }

    /**
     * @return mixed
     */
    public function getReviewdate()
    {
        return $this->reviewdate;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }
}
?>