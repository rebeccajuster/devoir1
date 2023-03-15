<?php

class Conducteur
{
    private String $Nom;
    private String $Prenom;

    /**
     * @param String $Nom
     * @param String $Prenom
     */
    public function __construct($Nom, $Prenom)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
    }

    /**
     * @return String
     */
    public function getNom(): string
    {
        return $this->Nom;
    }

    /**
     * @return String
     */
    public function getPrenom(): string
    {
        return $this->Prenom;
    }



}