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
        $this->country->addClubsDuPays($this); //Explication
        $this->mercatos = [];
    }
    //************** AJOUTER DES ELEMENTS DANS UN TAB VIDE **************
    public function addPlayer($player)
    {
        $this->mercatos[] = $player; // On ajoute l'objet $player au tableau $mercatos[]
    }
    
    //************** AFFICHE LES ELEMENTS AJOUTER  **************
    public function afficherPlayer()
    {
        $result =  "Le club " . $this . " est composé des joueurs suivants :<br>";// la variable $result contient  " le club " . $this (l'objet courant) etc..
        foreach ($this->mercatos as $player) // On parcours tous les elements (ici $player) de l'objet courant (ici le tab mercatos)
        { 
            $result .= $player . "<br>"; // pour chaque element ($player) du tab, on l'ajoute a la var $result
           
        }
        return $result . "<br>";
    }
    
    // POUR PASSER LES INFOS DE l'OBJET CLUB EN STRING ( pour pouvoir l'afficher )
    public function __toString()
    {
        return $this->clubName;
    }
}