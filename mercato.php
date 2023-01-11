<?php

class Mercato
{
    private $club;
    private $player;
    private $contract;
    
    
    public function __Construct(Club $club, Player $player, $contract)
    {
        $this->club = $club;
        $this->club->addPlayer($this);//Explication
        
        $this->player = $player;
        $this->player->addClub($this);//Explication
        
        $this->contract = $contract;
        
    }
    
    // POUR PASSER LES INFOS DE l'OBJET MERCATO EN STRING ( pour pouvoir l'afficher )
    public function __toString()
    {
        return $this->player . " est dans le club : " . $this->club . " en " . $this->contract . ".";
    }
}