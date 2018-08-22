<?php

abstract class EdificioPublico extends Edificio
{
    private $salas;
    private $administrador;
    private $construtores;

    /**
     * @return mixed
     */
    public function getSalas()
    {
        return $this->salas;
    }

    /**
     * @param mixed $salas
     */
    public function setSalas($salas)
    {
        $this->salas = $salas;
    }

    /**
     * @return mixed
     */
    public function getAdministrador()
    {
        return $this->administrador;
    }

    /**
     * @param mixed $administrador
     */
    public function setAdministrador($administrador)
    {
        $this->administrador = $administrador;
    }

    /**
     * @return mixed
     */
    public function getConstrutores()
    {
        return $this->construtores;
    }

    /**
     * @param mixed $construtores
     */
    public function setConstrutores($construtores)
    {
        $this->construtores = $construtores;
    }


}