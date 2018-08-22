<?php

class CortesGerais
{
    private $corteNobres;
    private $corteComuns;
    private $presidente;
    private $vicePresidente;
    private $deputados;

    /**
     * @return mixed
     */
    public function getCorteNobres()
    {
        return $this->corteNobres;
    }

    /**
     * @param mixed $corteNobres
     */
    public function setCorteNobres($corteNobres)
    {
        $this->corteNobres = $corteNobres;
    }

    /**
     * @return mixed
     */
    public function getCorteComuns()
    {
        return $this->corteComuns;
    }

    /**
     * @param mixed $corteComuns
     */
    public function setCorteComuns($corteComuns)
    {
        $this->corteComuns = $corteComuns;
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
    public function getVicePresidente()
    {
        return $this->vicePresidente;
    }

    /**
     * @param mixed $vicePresidente
     */
    public function setVicePresidente($vicePresidente)
    {
        $this->vicePresidente = $vicePresidente;
    }

    /**
     * @return mixed
     */
    public function getDeputados()
    {
        return $this->deputados;
    }

    /**
     * @param mixed $deputados
     */
    public function setDeputados($deputados)
    {
        $this->deputados = $deputados;
    }


}