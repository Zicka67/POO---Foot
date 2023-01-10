<?php
class Player
{
    private $lastName;
    private $firstName;
    private $birstDate;
    private $nationality;
    private $clubs; // ajouter par la suite
    
    public function __Construct($lastName, $firstName, $birstDate, nationality $nationality)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birstDate = $birstDate;
        $this->nationality = $nationality;
        $this->clubs = [];
    }
    
    public function getbirstDate()
    {
        return $this->birstDate;
    }
    
    public function setbirstDate($birstDate): self
    {
        $this->birstDate = $birstDate;
        
        return $this;
    }
    public function addClub($newClub)
    {
        $this->clubs[] = $newClub;
    }
    public function getClub()
    {
        $result =  "<br>" . "Le joueur " . $this . " fait parti des clubs suivants : <br>";
        foreach ($this->clubs as $club) {
            $result .= $club . "<br>"; // .= (concaténer) il ajoute a la variable $result les $club du tab $clubs
        }
        return $result; 
    }
    public function getNationality()
    {
        return "Le joueur " . $this . " est de nationalité: " . $this->nationality . ".";
    }
    // public function getAge()  //pour avoir l'âge
    // {
        //     $now = new DateTime();
        //     $bd = new DateTime($this->birstDate);
        //     $age = date_diff($now, $bd);
        //     return $age->y;
        // }
        // public function getInfo()  // Pour afficher toutes les infos du joueur
        // {
            //     $info = $this . " est née en " . $this->birstDate . " et à la nationalité " . $this->nationality . ", " . " est un joueur de  " . $this->getAge(). " ans";
            //     foreach ($this->clubs as $club) {
                //         $info .= "<br>" . $club . "<br>";
                //     }
                //     return $info;
                // }
                public function __toString()
                {
                    return $this->lastName . " " . $this->firstName . " " . $this->birstDate;
                }
                
                
            }