<?php

class ConselhoMunicipal
{
    private $municipio;
    private $presidente;
    private $vereadores;
    private $assistentes;
    private $inicioMandato;
    private $fimMandato;
    private $justicaMunicipal;

    /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @return mixed
     */
    public function getPresidente()
    {
        return $this->presidente;
    }

    /**
     * @param mixed $presidente
     */
    public function setPresidente($presidente)
    {
        $this->presidente = $presidente;
    }

    /**
     * @return mixed
     */
    public function getVereadores()
    {
        return $this->vereadores;
    }

    /**
     * @param mixed $vereadores
     */
    public function setVereadores($vereadores)
    {
        $this->vereadores = $vereadores;
    }

    /**
     * @return mixed
     */
    public function getAssistentes()
    {
        return $this->assistentes;
    }

    /**
     * @param mixed $assistentes
     */
    public function setAssistentes($assistentes)
    {
        $this->assistentes = $assistentes;
    }

    /**
     * @return mixed
     */
    public function getInicioMandato()
    {
        return $this->inicioMandato;
    }

    /**
     * @param mixed $inicioMandato
     */
    public function setInicioMandato($inicioMandato)
    {
        $this->inicioMandato = $inicioMandato;
    }

    /**
     * @return mixed
     */
    public function getFimMandato()
    {
        return $this->fimMandato;
    }

    /**
     * @param mixed $fimMandato
     */
    public function setFimMandato($fimMandato)
    {
        $this->fimMandato = $fimMandato;
    }

    /**
     * @return mixed
     */
    public function getJusticaMunicipal()
    {
        return $this->justicaMunicipal;
    }

    /**
     * @param mixed $justicaMunicipal
     */
    public function setJusticaMunicipal($justicaMunicipal)
    {
        $this->justicaMunicipal = $justicaMunicipal;
    }



}