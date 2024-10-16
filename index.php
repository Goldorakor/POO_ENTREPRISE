<h1>POO Entreprise</h1>


<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name .'.php'; // 'classes/' puisque nos fichiers de classe ont été stockés dans le dossier 'classes'
});

$elanFormation = new Entreprise ("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
echo $elanFormation->getRaisonSociale()."<br>";
// echo $elanFormation->_raisonSociale."<br>";  possible si la propriété est publique
// var_dump($elanFormation);

/*
echo "<br>";
echo "<br>";
echo $elanFormation->getRaisonSociale()." a été créée le ".$elanFormation->getDateCreation()->format("d.m.Y")." et se situe à l'adresse suivante : ".$elanFormation->getAdresse()." ".$elanFormation->getCodePostal()." ".$elanFormation->getVille().".<br>";
echo "<br>";
echo $elanFormation->getRaisonSociale()." a été créée le ".$elanFormation->getDateCreation()->format("d.m.Y")." et se situe à l'adresse suivante : ".$elanFormation->getAdresseComplete().".<br>";
*/

echo $elanFormation;
echo "<br>";
echo $elanFormation->getInfos();
echo "<br>";
echo $elanFormation->getInfos2();
echo "<br>";
echo "fin premier test";

$viaFormation = new Entreprise ("Via FORMATION", "1980-01-01", "32 rue des tulipes", "67200", "STRASBOURG");

$stephane = new Employe ("SMAIL", "Stéphane", "stephane@elan-formation.fr", $elanFormation);
// ligne au dessus, $elanFormation est un objet de la classe Entreprise, comme attendu par notre fonction
$mickael = new Employe ("MURMANN", "Mickaël", "mickael@elan-formation.fr", $elanFormation);

/*

var_dump($stephane);
echo "<br>";

echo $stephane."<br>";
echo "essai getInfos   ".$stephane->getInfos()."<br>";
echo "essai getInfos2   ".$stephane->getInfos2()."<br>";
echo "essai getInfos3   ".$stephane->getInfos3()."<br>";
// echo "essai getInfos4   ".$stephane->getInfos4()."<br>";

$stephane->setEntreprise($viaFormation); // le setter attend un objet Entreprise

echo $stephane->getInfos()."<br>";
echo $stephane->getInfos2()."<br>";
echo $stephane->getInfos3()."<br>";

*/

var_dump($elanFormation);


echo $elanFormation->afficherEmployes ();
