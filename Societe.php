<?php

class Societe
{
    // Déclaration des Attributs
    private $nom;
    public $adresse;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }


    public function setNom(string $nom)
    {
        // this référe à l'objet
        $this->nom = $nom;
    }

    public function  setAdresse(Adresse $adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }


}

