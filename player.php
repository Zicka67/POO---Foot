<?php
class Player
{
    private $lastName;
    private $firstName;
    private $birthDate;
    private $nationality;// ajouter par la suite
    private $clubs; // ajouter par la suite
    
    public function __Construct($lastName, $firstName, $birthDate, nationality $nationality)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birthDate = $birthDate;
        $this->nationality = $nationality;
        $this->clubs = [];
    }
    
    public function getbirthDate()
    {
        return $this->birthDate;
    }
    
    public function setbirthDate($birthDate): self
    {
        $this->birthDate = $birthDate;
        
        return $this;
    }
    //************** AJOUTER DES ELEMENTS DANS UN TAB VIDE **************
    public function addClub($club)
    {
        $this->clubs[] = $club;// On ajoute l'objet $club au tableau $clubs[]
    }
    public function getClub()
    {
        $result =  "<br>" . "Le joueur " . $this . " fait parti des clubs suivants : <br>";// la variable $result contient  " le joueur " . $this (l'objet courant) etc..
        foreach ($this->clubs as $club) // On parcours tous les elements (ici $club) de l'objet courant (ici le tab clubs)
        {
            $result .= "Le joueur " . $club . "<br>"; // .= (concaténer) pour chaque element ($club) du tab, on l'ajoute a la var $result
        }
        return $result; 
    }
    public function afficherNationality()
    {
        return "Le joueur " . $this . " est de nationalité: " . $this->nationality . ".";
    }
    
    // POUR PASSER LES INFOS DE l'OBJET PLAYER EN STRING ( pour pouvoir l'afficher )
    public function __toString()
    {
        return $this->lastName . " " . $this->firstName; //. " " . $this->birthDate
    }
    
    
}



// public function getAge()  //pour avoir l'âge
// {
    //     $now = new DateTime();
    //     $bd = new DateTime($this->birthDate);
    //     $age = date_diff($now, $bd);
    //     return $age->y;
    // }
    // public function getInfo()  // Pour afficher toutes les infos du joueur
    // {
        //     $info = $this . " est née en " . $this->birthDate . " et à la nationalité " . $this->nationality . ", " . " est un joueur de  " . $this->getAge(). " ans";
        //     foreach ($this->clubs as $club) {
            //         $info .= "<br>" . $club . "<br>";
            //     }
            //     return $info;
            // }
            
