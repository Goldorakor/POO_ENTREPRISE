<h1>POO Entreprise</h1>


<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name .'.php'; // 'classes/' puisque nos fichiers de classe ont été stockés dans le dossier 'classes'
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
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

