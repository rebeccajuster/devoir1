<?php

class Organisation
{
private String  $Nom ;
private  String $Ville;
private  $garage = [];

    /**
     * @param String $Nom
     * @param String $Ville

     */
    public function __construct($Nom, $Ville)
    {
        $this->Nom = $Nom;
        $this->Ville = $Ville;

    }

    public function addVehiculeInGarage(Vehicule $vehicule)
    {
        $this -> $garage = $vehicule;
    }

    /**
     * @return array
     */
    public function getGarage(): array
    {
        return $this->garage;
    }


}