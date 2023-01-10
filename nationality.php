<?php
class Nationality
{
    private string $nationalityName;
    private $allPlayers;
    
    public function __Construct(string $name)
    {
        $this->nationalityName = $name;
        $this->allPlayers = [];
    }
    
    public function getAllPlayers()
    {
        return $this->allPlayers;
    }
    
    public function setAllPlayers($allPlayers): self
    {
        $this->allPlayers = $allPlayers;
        
        return $this;
    }
    
    
    public function __toString()
    {
        return $this->nationalityName;
    }
}