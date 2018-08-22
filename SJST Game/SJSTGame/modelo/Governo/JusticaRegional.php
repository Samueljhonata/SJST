<?php

class JusticaRegional
{
    private $juizMor;
    private $juizes;
    private $juizDeFora;
    private $promotor;
    private $processos;

    /**
     * @return mixed
     */
    public function getJuizMor()
    {
        return $this->juizMor;
    }

    /**
     * @param mixed $juizMor
     */
    public function setJuizMor($juizMor)
    {
        $this->juizMor = $juizMor;
    }

    /**
     * @return mixed
     */
    public function getJuizes()
    {
        return $this->juizes;
    }

    /**
     * @param mixed $juizes
     */
    public function setJuizes($juizes)
    {
        $this->juizes = $juizes;
    }

    /**
     * @return mixed
     */
    public function getJuizDeFora()
    {
        return $this->juizDeFora;
    }

    /**
     * @param mixed $juizDeFora
     */
    public function setJuizDeFora($juizDeFora)
    {
        $this->juizDeFora = $juizDeFora;
    }

    /**
     * @return mixed
     */
    public function getPromotor()
    {
        return $this->promotor;
    }

    /**
     * @param mixed $promotor
     */
    public function setPromotor($promotor)
    {
        $this->promotor = $promotor;
    }

    /**
     * @return mixed
     */
    public function getProcessos()
    {
        return $this->processos;
    }

    /**
     * @param mixed $processos
     */
    public function setProcessos($processos)
    {
        $this->processos = $processos;
    }


}