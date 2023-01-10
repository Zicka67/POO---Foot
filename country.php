<?php
Class Country
{
    private $countryName;
    private $allTeams;

    public function __Construct ($countryName)
    {
        $this->countryName=$countryName;
        $this->allTeams=[];
    }
    public function addClubsAuPays($team)
    {
        $this->allTeams[] = $team; 
    }
    public function afficherClubs()
    {
        $result= $this->countryName." contient les équipes suivantes : <br>";
        foreach ($this->allTeams as $club)
        {
            $result.= $club."<br>";
        }
        return $result."<br>";
    }
    public function __toString()
    {
        return $this->countryName;
    }
}