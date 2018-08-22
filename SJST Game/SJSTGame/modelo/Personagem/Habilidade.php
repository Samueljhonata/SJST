<?php

class Habilidade
{
    private $nomeHab;
    private $tipo;
    private $porcentagem;
    private $nivel;

    /**
     * @return mixed
     */
    public function getNomeHab()
    {
        return $this->nomeHab;
    }

    /**
     * @param mixed $nomeHab
     */
    public function setNomeHab($nomeHab)
    {
        $this->nomeHab = $nomeHab;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getPorcentagem()
    {
        return $this->porcentagem;
    }

    /**
     * @param mixed $porcentagem
     */
    public function setPorcentagem($porcentagem)
    {
        $this->porcentagem = $porcentagem;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }


}