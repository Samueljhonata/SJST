<?php
require_once("Carta.php");
class Correio
{
    private $entrada;
    private $saida;
    private $correspondencia;

    /**
     * @return mixed
     */
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * @param mixed $entrada
     */
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;
    }

    /**
     * @return mixed
     */
    public function getSaida()
    {
        return $this->saida;
    }

    /**
     * @param mixed $saida
     */
    public function setSaida($saida)
    {
        $this->saida = $saida;
    }

    /**
     * @return mixed
     */
    public function getCorrespondencia()
    {
        return $this->correspondencia;
    }

    /**
     * @param mixed $correspondencia
     */
    public function setCorrespondencia($correspondencia)
    {
        $this->correspondencia = $correspondencia;
    }


}