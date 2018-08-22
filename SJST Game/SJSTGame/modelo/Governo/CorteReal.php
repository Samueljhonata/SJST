<?php

class CorteReal
{
    private $familiaReal;
    private $primeiroMinistro;

    /**
     * @return mixed
     */
    public function getFamiliaReal()
    {
        return $this->familiaReal;
    }

    /**
     * @param mixed $familiaReal
     */
    public function setFamiliaReal($familiaReal)
    {
        $this->familiaReal = $familiaReal;
    }

    /**
     * @return mixed
     */
    public function getPrimeiroMinistro()
    {
        return $this->primeiroMinistro;
    }

    /**
     * @param mixed $primeiroMinistro
     */
    public function setPrimeiroMinistro($primeiroMinistro)
    {
        $this->primeiroMinistro = $primeiroMinistro;
    }


}