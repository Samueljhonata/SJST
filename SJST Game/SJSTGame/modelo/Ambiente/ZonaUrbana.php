<?php

class ZonaUrbana
{
    private $centro;
    private $bResidencial;
    private $bComercial;

    /**
     * @return mixed
     */
    public function getCentro()
    {
        return $this->centro;
    }

    /**
     * @param mixed $centro
     */
    public function setCentro($centro)
    {
        $this->centro = $centro;
    }

    /**
     * @return mixed
     */
    public function getBResidencial()
    {
        return $this->bResidencial;
    }

    /**
     * @param mixed $bResidencial
     */
    public function setBResidencial($bResidencial)
    {
        $this->bResidencial = $bResidencial;
    }

    /**
     * @return mixed
     */
    public function getBComercial()
    {
        return $this->bComercial;
    }

    /**
     * @param mixed $bComercial
     */
    public function setBComercial($bComercial)
    {
        $this->bComercial = $bComercial;
    }



}