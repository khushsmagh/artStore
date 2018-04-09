<?php

Class SingleArtist
{
private $artistID;
private $firstname;
private $lastname;
private $nationality;
private $gender;
private $yearofbirth;
private $yearofdeath;
private $details;
private $artistlink;

public function __construct($artistID , $firstname , $lastname , $nationality ,
$gender , $yearofbirth , $yearofdeath , $details, $artistlink)
{
    $this->artistID = $artistID;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->nationality = $nationality;
    $this->gender = $gender;
    $this->yearofbirth = $yearofbirth;
    $this->yearofdeath = $yearofdeath;
    $this->details = $details;
    $this->artistlink = $artistlink;

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

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getYearofbirth()
    {
        return $this->yearofbirth;
    }

    /**
     * @return mixed
     */
    public function getYearofdeath()
    {
        return $this->yearofdeath;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @return mixed
     */
    public function getArtistlink()
    {
        return $this->artistlink;
    }

}
?>