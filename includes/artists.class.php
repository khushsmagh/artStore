<?php
Class Artists
{
private $sales;
private $artist;
private $firstname;
private $lastname;
function __construct($sales , $artist , $firstname , $lastname)
{
    $this->sales = $sales;
    $this->artist = $artist;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
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
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }


}

?>