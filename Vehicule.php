<?php

class Vehicule
{
    private String $Matriculation;
    private String $Type;
    private String $Statut;
    private Conducteur $conducteur ;



    /**
     * @param String $Matriculation
     * @param String $Type
     * @param String $Statut
     * @param Conducteur $conducteur
     */
    public function __construct($Matriculation, $Type, $Statut)
    {
        $this->Matriculation = $Matriculation;
        $this->Type = $Type;
        $this->Statut = $Statut;

    }

    /**
     * @return String
     */
    public function getMatriculation()
    {
        return $this->Matriculation;
    }

    /**
     * @return String
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @return String
     */
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * @return Conducteur
     */
    public function getConducteur()
    {
        return $this->conducteur;
    }

    /**
     * @param Conducteur $conducteur
     */
    public function setConducteur(Conducteur $conducteur): Conducteur
    {
        return $this->conducteur = $conducteur;
    }




}