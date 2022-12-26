<?php

namespace Model;

class Employer
{

    private $vorname;
    private $nachname;
    private $adresse;
    private $ort;
    private $plz;
    private $eintritdatum;
    private $austritdatum;

    /**
     * @return mixed
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param mixed $vorname
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * @return mixed
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * @param mixed $nachname
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * @param mixed $ort
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    }

    /**
     * @return mixed
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param mixed $plz
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;
    }

    /**
     * @return mixed
     */
    public function getEintritdatum()
    {
        return $this->eintritdatum;
    }

    /**
     * @param mixed $eintritdatum
     */
    public function setEintritdatum($eintritdatum)
    {
        $this->eintritdatum = $eintritdatum;
    }

    /**
     * @return mixed
     */
    public function getAustritdatum()
    {
        return $this->austritdatum;
    }

    /**
     * @param mixed $austritdatum
     */
    public function setAustritdatum($austritdatum)
    {
        $this->austritdatum = $austritdatum;
    }


}