<?php

class Leilao
{
    private $item;
    private $valorInicial;
    private $ultimoLance;
    private $arrematado;
    private $arrematador;

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param mixed $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * @return mixed
     */
    public function getValorInicial()
    {
        return $this->valorInicial;
    }

    /**
     * @param mixed $valorInicial
     */
    public function setValorInicial($valorInicial)
    {
        $this->valorInicial = $valorInicial;
    }

    /**
     * @return mixed
     */
    public function getUltimoLance()
    {
        return $this->ultimoLance;
    }

    /**
     * @param mixed $ultimoLance
     */
    public function setUltimoLance($ultimoLance)
    {
        $this->ultimoLance = $ultimoLance;
    }

    /**
     * @return mixed
     */
    public function getArrematado()
    {
        return $this->arrematado;
    }

    /**
     * @param mixed $arrematado
     */
    public function setArrematado($arrematado)
    {
        $this->arrematado = $arrematado;
    }

    /**
     * @return mixed
     */
    public function getArrematador()
    {
        return $this->arrematador;
    }

    /**
     * @param mixed $arrematador
     */
    public function setArrematador($arrematador)
    {
        $this->arrematador = $arrematador;
    }

}