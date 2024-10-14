<?php

class Entreprise {
    // attributs
    private string $_raisonSociale;
    private Datetime $_dateCreation;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;

    // constructeur
    public function __constructor (string $raisonSociale, string $dateCreation, string $adresse, string $codePostal, string $ville) {
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


}