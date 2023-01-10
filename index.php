<?php
// spl_autoload_register(function ($class_name) {

//     require_once $class_name . '.php';
// });

require "club.php";
require "country.php";
require "mercato.php";
require "nationality.php";
require "player.php";

$Francais = new Nationality("Francaise");
$Espagnol = new Nationality("Espagnole");
$Anglais = new Nationality("Anglaise");
$Portugais = new Nationality("Portugaise");
$Bresil = new Nationality("Brésilenne");

$France = new Country("France");
$Espagne = new Country("Spain");
$Italie = new Country("Italy");
$Portugal = new Country("Pourtugal");
$Angleterre = new Country ("Angleterre");

$Mbappe = new Player("Killian", "Mbappe", "1998", $Francais);
$Neymar = new Player("Neymar", "junior","1995", $Bresil);
$Messi = new Player("Lionel", "Messi", "1987", $Espagnol);
$Ronaldo = new Player("Cristiano", "Ronaldo", "1998", $Portugais);
$Benzema = new Player("Karim", "Benzema", "1987", $Francais);
$Gameiro = new Player("Kevin", "Gameiro", "1987", $Francais);
$Kane = new Player("Harry", "Kane", "1993", $Anglais);



$psg = new Club("PSG", $France);
$realmadrid = new Club("Real Madrid", $Espagne);
$rcs = new Club("RCS", $France);
$juventus = new Club("Juventus", $Italie);
$manU = new Club("Manchester", $Angleterre);


$mercato1 = new Mercato($psg, $Mbappe, "2017");
$mercato2 = new Mercato($rcs, $Gameiro, "2008");
$mercato3 = new Mercato($manU, $Kane, "2025");




echo "<b>Afficher les clubs d'un pays :</b><br>";
echo $France->afficherClubs();
echo "<b>Afficher les joueurs d'un club : </b><br>";
echo $rcs->getPlayers();
// echo "<b>Afficher les infos du joueur : </b><br>";
// echo $Mbappe->getInfo();
echo "<br><b>Afficher les clubs du joueur : </b>";
echo $Gameiro->getClub();
echo "<br><b>Afficher la nationalité du joueur :</b><br>";
echo $Mbappe->getNationality();