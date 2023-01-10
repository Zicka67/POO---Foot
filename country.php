<?php
Class Country
{
    private $countryName;
    private $allClubs;
    
    public function __Construct ($countryName)
    {
        $this->countryName=$countryName;
        $this->allClubs=[];
    }
    
    //************** AJOUTER DES ELEMENTS DANS UN TAB VIDE **************
    public function addClubsDuPays($club)
    {
        $this->allClubs[] = $club; // On ajoute l'objet $club au tableau $allClubs[]
    }
    
    //************** AFFICHE LES ELEMENTS AJOUTER  **************
    public function afficherClubs()
    {
        $result= $this->countryName." contient les équipes suivantes : <br>";// la variable $result contient ici le countryName de $this (l'objet courant) etc..
        foreach ($this->allClubs as $club)// On parcours tous les elements (ici $club) de l'objet courant (ici le tab allClubs)
        {
            $result.= $club."<br>";// pour chaque element ($club) du tab, on l'ajoute a la var $result
        }
        return $result."<br>";
    }
    
    // POUR PASSER LES INFOS DE l'OBJET COUNTRY EN STRING ( pour pouvoir l'afficher )
    public function __toString()
    {
        return $this->countryName . $this->allClubs;
    }
}