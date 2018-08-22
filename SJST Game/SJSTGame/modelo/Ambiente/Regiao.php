<?php

class Regiao
{
    private $idRegiao;
    private $capitalRegiao;
    private $municipios;
    private $habitantes;
    private $presentes;
    private $conselhoRegional;

    /**
     * @return mixed
     */
    public function getIdRegiao()
    {
        return $this->idRegiao;
    }

    /**
     * @param mixed $idRegiao
     */
    public function setIdRegiao($idRegiao)
    {
        $this->idRegiao = $idRegiao;
    }

    /**
     * @return mixed
     */
    public function getCapitalRegiao()
    {
        return $this->capitalRegiao;
    }

    /**
     * @param mixed $capitalRegiao
     */
    public function setCapitalRegiao($capitalRegiao)
    {
        $this->capitalRegiao = $capitalRegiao;
    }

    /**
     * @return mixed
     */
    public function getMunicipios()
    {
        return $this->municipios;
    }

    /**
     * @param mixed $municipios
     */
    public function setMunicipios($municipios)
    {
        $this->municipios = $municipios;
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
    public function getConselhoRegional()
    {
        return $this->conselhoRegional;
    }

    /**
     * @param mixed $conselhoRegional
     */
    public function setConselhoRegional($conselhoRegional)
    {
        $this->conselhoRegional = $conselhoRegional;
    }


}