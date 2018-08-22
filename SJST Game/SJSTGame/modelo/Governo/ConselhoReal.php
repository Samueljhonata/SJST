<?php

class ConselhoReal
{
    private $reino;
    private $corteReal;
    private $cortesGerais;
    private $justicaReal;
    private $inicioMandato;
    private $fimMandato;

    /**
     * @return mixed
     */
    public function getReino()
    {
        return $this->reino;
    }

    /**
     * @param mixed $reino
     */
    public function setReino($reino)
    {
        $this->reino = $reino;
    }

    /**
     * @return mixed
     */
    public function getCorteReal()
    {
        return $this->corteReal;
    }

    /**
     * @param mixed $corteReal
     */
    public function setCorteReal($corteReal)
    {
        $this->corteReal = $corteReal;
    }

    /**
     * @return mixed
     */
    public function getCortesGerais()
    {
        return $this->cortesGerais;
    }

    /**
     * @param mixed $cortesGerais
     */
    public function setCortesGerais($cortesGerais)
    {
        $this->cortesGerais = $cortesGerais;
    }

    /**
     * @return mixed
     */
    public function getJusticaReal()
    {
        return $this->justicaReal;
    }

    /**
     * @param mixed $justicaReal
     */
    public function setJusticaReal($justicaReal)
    {
        $this->justicaReal = $justicaReal;
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