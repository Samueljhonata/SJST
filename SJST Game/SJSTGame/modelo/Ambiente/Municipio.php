<?php

class Municipio
{
    private $idMunicipio;
    private $sedeMunicipal;
    private $povoacoes;
    private $regiao;
    private $zonaRural;
    private $habitantes;
    private $presentes;
    private $conselhoMunicipal;

    /**
     * @return mixed
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * @param mixed $idMunicipio
     */
    public function setIdMunicipio($idMunicipio)
    {
        $this->idMunicipio = $idMunicipio;
    }

    /**
     * @return mixed
     */
    public function getSedeMunicipal()
    {
        return $this->sedeMunicipal;
    }

    /**
     * @param mixed $sedeMunicipal
     */
    public function setSedeMunicipal($sedeMunicipal)
    {
        $this->sedeMunicipal = $sedeMunicipal;
    }

    /**
     * @return mixed
     */
    public function getPovoacoes()
    {
        return $this->povoacoes;
    }

    /**
     * @param mixed $povoacoes
     */
    public function setPovoacoes($povoacoes)
    {
        $this->povoacoes = $povoacoes;
    }

    /**
     * @return mixed
     */
    public function getRegiao()
    {
        return $this->regiao;
    }

    /**
     * @param mixed $regiao
     */
    public function setRegiao($regiao)
    {
        $this->regiao = $regiao;
    }

    /**
     * @return mixed
     */
    public function getZonaRural()
    {
        return $this->zonaRural;
    }

    /**
     * @param mixed $zonaRural
     */
    public function setZonaRural($zonaRural)
    {
        $this->zonaRural = $zonaRural;
    }

    /**
     * @return mixed
     */
    public function getHabitantes()
    {
        return $this->habitantes;
    }

    /**
     * @param mixed $habitantes
     */
    public function setHabitantes($habitantes)
    {
        $this->habitantes = $habitantes;
    }

    /**
     * @return mixed
     */
    public function getPresentes()
    {
        return $this->presentes;
    }

    /**
     * @param mixed $presentes
     */
    public function setPresentes($presentes)
    {
        $this->presentes = $presentes;
    }

    /**
     * @return mixed
     */
    public function getConselhoMunicipal()
    {
        return $this->conselhoMunicipal;
    }

    /**
     * @param mixed $conselhoMunicipal
     */
    public function setConselhoMunicipal($conselhoMunicipal)
    {
        $this->conselhoMunicipal = $conselhoMunicipal;
    }



}