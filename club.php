<?php
class Club
{
    private $clubName;
    private $country;
    private $mercatos; //ajouter par la suite


    public function __Construct($clubName, country $country)
    {
        $this->clubName = $clubName;
        $this->country = $country;
        $this->country->addClubsAuPays($this);
        $this->mercatos = [];
    }
    public function addPlayer($newPlayer)
    {
        $this->mercatos[] = $newPlayer;
    }

    public function getPlayers()
    {
        $result =  "Le club " . $this . " est composé des joueurs suivants :<br>";
        foreach ($this->mercatos as $players) {
            $result .= $players . "<br>"; // le ".=" AJOUTE a la variable "$result" les keys "club" du tableau "clubs"
        }
        return $result . "<br>";
    }

    public function __toString()
    {
        return $this->clubName;
    }
}