<?php

class JusticaMunicipal
{
    private $juiz;
    private $promotor;
    private $processos;

    /**
     * @return mixed
     */
    public function getJuiz()
    {
        return $this->juiz;
    }

    /**
     * @param mixed $juiz
     */
    public function setJuiz($juiz)
    {
        $this->juiz = $juiz;
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