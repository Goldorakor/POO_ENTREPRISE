<?php

class Entreprise {
    // attributs
    private string $_raisonSociale;
    private Datetime $_dateCreation;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;
    private array $_employes; // pluriel car c'est une collection d'employés

    // constructeur
    public function __construct (string $raisonSociale, string $dateCreation, string $adresse, string $codePostal, string $ville) {
        $this->_raisonSociale = $raisonSociale;
        $this->_dateCreation = new DateTime($dateCreation);
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
        $this->_employes = []; // on initialise un tableau vide, qui se remplira d'éléments qui seront des objets de la classe Employe.
    }

    /* getters et setters
    public function getRaisonSociale() {
        return $this->_raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale) {
        $this->_raisonSociale = $raisonSociale;
    }
    */    


/* on a utilisé l'extension pour générer automatiquement nos getters et nos setters */

    
    public function getRaisonSociale () : string
    {
        return $this->_raisonSociale;
    }

    
    public function setRaisonSociale (string $raisonSociale)
    {
        $this->_raisonSociale = $raisonSociale;

        return $this;
    }

    
    public function getDateCreation () : DateTime
    {
        return $this->_dateCreation;
    }


/*
    public function setDateCreation (DateTime $dateCreation)
    {
        $this->_dateCreation = $dateCreation;

        return $this;
    }
    
    Explications : ici, notre fonction setDateCreation() attend comme argument un objet DateTime.
    Ce nouveau DateTime ira simplement écraser le précédent DateTime.

*/

/* ici, c'est une méthode plus aisée : on entre une date en caractères et notre fonction setDateCreation()
se charge de la transformer en objet DateTime. C'est un comportement plus proche de notre __construct() et plus simple 
pour la saisie de la nouvelle date par un utilisateur.

*/
    public function setDateCreation (string $dateCreation)
    {
        $this->_dateCreation = new DateTime($dateCreation);   

        return $this;
    }
    


    public function getAdresse () : string
    {
        return $this->_adresse;
    }

    
    public function setAdresse (string $adresse)
    {
        $this->_adresse = $adresse;

        return $this;
    }

     
    public function getCodePostal () : string
    {
        return $this->_codePostal;
    }

     
    public function setCodePostal (string $codePostal)
    {
        $this->_codePostal = $codePostal;

        return $this;
    }

     
    public function getVille () : string
    {
        return $this->_ville;
    }

    
    public function setVille (string $ville)
    {
        $this->_ville = $ville;

        return $this;
    }

    public function getAdresseComplete () : string {
        return $this->_adresse." ".$this->_codePostal." ".$this->_ville;
    }

    public function getInfos() : string {
        return $this->getRaisonSociale()." a été créée le ".$this->getDateCreation()->format("d.m.Y")." et se situe à l'adresse suivante : ".$this->getAdresseComplete().".<br>";
    }
    
// une fonction équivalente serait : 

    public function getInfos2() : string {
        return $this->_raisonSociale." a été créée le ".$this->_dateCreation->format("d.m.Y")." et se situe à l'adresse suivante : ".$this->getAdresseComplete().".<br>";
    }

    // car on peut utiliser aussi bien 'getRaisonSociale()' que '_raisonSociale' puisque à l'intérieur de notre classe ! 



// l'echo d'un objet appelle la méthode __toString. ça permet d'afficher qque chose quand on appelle l'objet, ici, on affiche la raison sociale de l'entreprise.
// c'est pratique pour se servir de $this pour afficher le nom d'une entreprise simplement.

    public function getEmployes()
    {
        return $this->_employes;
    }
 
    public function setEmployes($employes)
    {
        $this->_employes = $employes;

        return $this;
    }

    public function addEmploye (Employe $employe) {
        $this->_employes[] = $employe; //$employe est un objet de la classe Employe
        // array_push ($this->_employes, $employe);
    }

    public function afficherEmployes () {
        $result = "<h2>Employés de $this</h2><ul>";

        foreach ($this->_employes as $employe) {
            $result .= "<li>$employe</li>";
        }

        $result .= "</ul>";

        return $result;
    }

    public function __toString () : string {
        return $this->_raisonSociale." (".$this->_dateCreation->format('Y').")";
    }
}
