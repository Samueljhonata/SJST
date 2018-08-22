<?php

class ConselhoRegional
{
    private $regiao;
    private $governador;
    private $viceGovernador;
    private $justicaRegional;
    private $secretarios;
    private $inicioMandato;
    private $fimMandato;

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
    public function getGovernador()
    {
        return $this->governador;
    }

    /**
     * @param mixed $governador
     */
    public function setGovernador($governador)
    {
        $this->governador = $governador;
    }

    /**
     * @return mixed
     */
    public function getViceGovernador()
    {
        return $this->viceGovernador;
    }

    /**
     * @param mixed $viceGovernador
     */
    public function setViceGovernador($viceGovernador)
    {
        $this->viceGovernador = $viceGovernador;
    }

    /**
     * @return mixed
     */
    public function getJusticaRegional()
    {
        return $this->justicaRegional;
    }

    /**
     * @param mixed $justicaRegional
     */
    public function setJusticaRegional($justicaRegional)
    {
        $this->justicaRegional = $justicaRegional;
    }

    /**
     * @return mixed
     */
    public function getSecretarios()
    {
        return $this->secretarios;
    }

    /**
     * @param mixed $secretarios
     */
    public function setSecretarios($secretarios)
    {
        $this->secretarios = $secretarios;
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


}