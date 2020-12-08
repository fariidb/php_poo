<?php

class Adresse
{
    private $nom_rue;
    private $numero_rue;
    private $complement_adresse;
    private $code_postal;
    private $ville;

    /**
     * @return mixed
     */
    public function getNumeroRue()
    {
        return $this->numero_rue;
    }

    /**
     * @return mixed
     */
    public function getComplementAdresse()
    {
        return $this->complement_adresse;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    public function getNomRue()
    {
        return $this->nom_rue;
    }

    /**
     * @param string $nom_rue
     * @return $this
     */
    public function setNomRue (string $nom_rue)
    {
        $this->nom_rue = strtolower($nom_rue); // rappel: strtolower = string to minuscule
        return $this;
    }

    /**
     * @param int $numero_rue
     * @return $this
     */
    public function setNumeroRue (int $numero_rue)
    {
        $this->numero_rue = $numero_rue;
        return $this;
    }

    /**
     * @param string $complement_adresse
     * @return $this
     */
    public function setComplementAdresse (string $complement_adresse)
    {
        $this->complement_adresse = $complement_adresse;
        return $this;

    }

    /**
     * @param int $code_postal
     * @return $this
     */
    public function setCodePostal (int $code_postal)
    {
        $this->code_postal = $code_postal;
        return $this;

    }

    /**
     * @param string $ville
     * @return $this
     */
    public function setVille (string $ville)
    {
        $this->ville = strtoupper($ville); // rappel : strtoupper = string to majuscule
        return $this;

    }
}