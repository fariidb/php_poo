<?php
//------------------------------ RECUPERATION FICHIER -------------------
require_once "Societe.php";
require_once "Adresse.php";

//------------------------------ AUTOLOADER -----------------------------



//------------------------------ OBJET ----------------------------------
// création d'objet

$facebook = new Societe();
$facebook->setNom("Facebook");
//$facebook->adresse = "rue de Paris";

$adresse_siege_facebook = new Adresse();
$adresse_siege_facebook
    ->setNomRue("rue Ménars")
    ->setNumeroRue(6)
    ->setCodePostal(75002)
    ->setVille("Paris")
    ->setComplementAdresse("Dans le quartier bourse");


$facebook->setAdresse($adresse_siege_facebook);




//------------------------------ AFFICHAGE ----------------------------------
//echo $adresse_siege_facebook->getVille();

// On afficher le code postal de l'objet facebook
echo $facebook->getAdresse()->getCodePostal();

// On affiche l'objet facebook (en DEBUG)
//var_dump($adresse_siege_facebook);
//var_dump($facebook);