<?php

class Employe {
    private string $_nom;
    private string $_prenom;
    private string $_email;
    private Entreprise $_entreprise;  // $_entrerprise est un objet de la classe Entreprise qui sera embarqué dans l'objet $_employe de la classe Employe.

    public function __construct (string $nom, string $prenom, string $email, Entreprise $entreprise) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_entreprise = $entreprise; // objet et non pas chaine de caracrtères
        $this->_entreprise->addEmploye($this); // addEmploye() est une fonction de la classe Entreprise. A la construction d'un objet de Employe, on ira rajouter cet objet dans le tableau $_employes de la classe Entreprise.
    }

     
    public function getNom () : string
    {
        return $this->_nom;
    }

    
    public function setNom (string $nom)
    {
        $this->_nom = $nom;

        return $this;
    }

     
    public function getPrenom () : string
    {
        return $this->_prenom;
    }

    
    public function setPrenom (string $prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

     
    public function getEmail () : string
    {
        return $this->_email;
    }

    
    public function setEmail (string $email)
    {
        $this->_email = $email;

        return $this;
    }
    
    public function getEntreprise() : Entreprise
    {
        return $this->_entreprise;
    }
    
    public function setEntreprise( Entreprise $entreprise)
    {
        $this->_entreprise = $entreprise;
        
        return $this;
    }

    public function getInfos () {
        return $this." travaille dans l'entreprise ".$this->_entreprise.".<br>";
    }
    
    public function getInfos2 () {
        return $this->_prenom." ".$this->_nom." travaille dans l'entreprise ".$this->_entreprise.".<br>";
    }

    public function getInfos3 () {
        return $this->_prenom." ".$this->_nom." travaille dans l'entreprise ".$this->_entreprise->getRaisonSociale().".<br>"; // on fouille à l'intérieur de l'objet entreprise de notre 'objet en cours' employé.
    } // méthode longue mais c'est plus compréhensible !

/*
    public function getInfos4 () {
        return $this->_prenom." ".$this->_nom." travaille dans l'entreprise ".$this->_entreprise->_raisonSociale ().".<br>";
    }  c'est juste pour tester l'effet 'pulic, private, protected' sur la propriété _raisonSociale de la classe Entreprise -> getRaisonSociale () évite ce souci. On a fait du chainage (en parcourant des objets dans des objets).
*/

    public function __toString () {
        return $this->_prenom." ".$this->_nom;
    }
}
