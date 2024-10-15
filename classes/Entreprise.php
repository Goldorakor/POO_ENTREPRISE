<?php

class Entreprise {
    // attributs
    private string $_raisonSociale;
    private Datetime $_dateCreation;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;

    // constructeur
    public function __construct (string $raisonSociale, string $dateCreation, string $adresse, string $codePostal, string $ville) {
        $this->_raisonSociale = $raisonSociale;
        $this->_dateCreation = new DateTime($dateCreation);
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
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

     
    public function setDateCreation (string $dateCreation) // je veux écraser la 'date string' ou la 'date transformée en objet' ???? 
    {
        $this->_dateCreation = $dateCreation;   // $this->_dateCreation = new DateTime($dateCreation);   

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


    public function __toString () : string {
        return $this->_raisonSociale." (".$this->_dateCreation->format('Y').")";
    }
}

