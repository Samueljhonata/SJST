<?php

class LinhaCombate
{
    private $combatentes;
    private $maximo;
    private $coefAtaque;
    private $coefDefesa;
    private $armas;
    private $roupas;

    /**
     * @return mixed
     */
    public function getCombatentes()
    {
        return $this->combatentes;
    }

    /**
     * @param mixed $combatentes
     */
    public function setCombatentes($combatentes)
    {
        $this->combatentes = $combatentes;
    }

    /**
     * @return mixed
     */
    public function getMaximo()
    {
        return $this->maximo;
    }

    /**
     * @param mixed $maximo
     */
    public function setMaximo($maximo)
    {
        $this->maximo = $maximo;
    }

    /**
     * @return mixed
     */
    public function getCoefAtaque()
    {
        return $this->coefAtaque;
    }

    /**
     * @param mixed $coefAtaque
     */
    public function setCoefAtaque($coefAtaque)
    {
        $this->coefAtaque = $coefAtaque;
    }

    /**
     * @return mixed
     */
    public function getCoefDefesa()
    {
        return $this->coefDefesa;
    }

    /**
     * @param mixed $coefDefesa
     */
    public function setCoefDefesa($coefDefesa)
    {
        $this->coefDefesa = $coefDefesa;
    }

    /**
     * @return mixed
     */
    public function getArmas()
    {
        return $this->armas;
    }

    /**
     * @param mixed $armas
     */
    public function setArmas($armas)
    {
        $this->armas = $armas;
    }

    /**
     * @return mixed
     */
    public function getRoupas()
    {
        return $this->roupas;
    }

    /**
     * @param mixed $roupas
     */
    public function setRoupas($roupas)
    {
        $this->roupas = $roupas;
    }


}