<?php
Class Genres{
private $genreID;
private $genreName;
private $eraID;
private $description;
private $link;

function __construct($genreID , $genreName , $eraID , $description , $link)
{
    $this->genreID = $genreID;
    $this->genreName = $genreName;
    $this->eraID = $eraID;
    $this->description = $description;
    $this->link = $link;

}

    /**
     * @return mixed
     */
    public function getGenreID()
    {
        return $this->genreID;
    }

    /**
     * @return mixed
     */
    public function getGenreName()
    {
        return $this->genreName;
    }

    /**
     * @return mixed
     */
    public function getEraID()
    {
        return $this->eraID;
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
    public function getLink()
    {
        return $this->link;
    }


}

?>