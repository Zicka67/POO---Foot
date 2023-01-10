<?php

class Mercato
{
    private $club;
    private $player;
    private $contract;


    public function __Construct(Club $club, Player $player, $contract)
    {
        $this->club = $club;
        $this->club->addPlayer($this);

        $this->player = $player;
        $this->player->addClub($this);

        $this->contract = $contract;

    }
    public function __toString()
    {
        return $this->player . " est en contract avec le club : " . $this->club . " depuis " . $this->contract . ".";
    }
}