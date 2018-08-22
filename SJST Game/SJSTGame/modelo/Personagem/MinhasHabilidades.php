<?php
require_once ("Habilidade.php");
class MinhasHabilidades
{
    private $forca;
    private $carisma;
    private $inteligencia;
    private $agilidade;
    private $habOficio;
    private $estudo;

    /**
     * @return mixed
     */
    public function getForca()
    {
        return $this->forca;
    }

    /**
     * @param mixed $forca
     */
    public function setForca($forca)
    {
        $this->forca = $forca;
    }

    /**
     * @return mixed
     */
    public function getCarisma()
    {
        return $this->carisma;
    }

    /**
     * @param mixed $carisma
     */
    public function setCarisma($carisma)
    {
        $this->carisma = $carisma;
    }

    /**
     * @return mixed
     */
    public function getInteligencia()
    {
        return $this->inteligencia;
    }

    /**
     * @param mixed $inteligencia
     */
    public function setInteligencia($inteligencia)
    {
        $this->inteligencia = $inteligencia;
    }

    /**
     * @return mixed
     */
    public function getAgilidade()
    {
        return $this->agilidade;
    }

    /**
     * @param mixed $agilidade
     */
    public function setAgilidade($agilidade)
    {
        $this->agilidade = $agilidade;
    }

    /**
     * @return mixed
     */
    public function getHabOficio()
    {
        return $this->habOficio;
    }

    /**
     * @param mixed $habOficio
     */
    public function setHabOficio($habOficio)
    {
        $this->habOficio = $habOficio;
    }

    /**
     * @return mixed
     */
    public function getEstudo()
    {
        return $this->estudo;
    }

    /**
     * @param mixed $estudo
     */
    public function setEstudo($estudo)
    {
        $this->estudo = $estudo;
    }



}