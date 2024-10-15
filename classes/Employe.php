<?php

class Employe {
    private string $_nom;
    private string $_prenom;
    private string $_email;

    public function __construct (string $nom, string $prenom, string $email) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
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
}

