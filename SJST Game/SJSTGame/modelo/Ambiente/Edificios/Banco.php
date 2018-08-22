<?php

class Banco extends EdificioPublico
{
    private $tipoAgencia;
    private $numAgencia;

    /**
     * @return mixed
     */
    public function getTipoAgencia()
    {
        return $this->tipoAgencia;
    }

    /**
     * @param mixed $tipoAgencia
     */
    public function setTipoAgencia($tipoAgencia)
    {
        $this->tipoAgencia = $tipoAgencia;
    }

    /**
     * @return mixed
     */
    public function getNumAgencia()
    {
        return $this->numAgencia;
    }

    /**
     * @param mixed $numAgencia
     */
    public function setNumAgencia($numAgencia)
    {
        $this->numAgencia = $numAgencia;
    }


}