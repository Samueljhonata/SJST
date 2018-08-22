<?php

class Exercito
{
    private $id;
    private $nome;
    private $general;
    private $inventario;
    private $moral;
    private $honra;
    private $listaNegra;
    private $listaBranca;
    private $unidadesMilitares;
    private $fundacao;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * @param mixed $general
     */
    public function setGeneral($general)
    {
        $this->general = $general;
    }

    /**
     * @return mixed
     */
    public function getInventario()
    {
        return $this->inventario;
    }

    /**
     * @param mixed $inventario
     */
    public function setInventario($inventario)
    {
        $this->inventario = $inventario;
    }

    /**
     * @return mixed
     */
    public function getMoral()
    {
        return $this->moral;
    }

    /**
     * @param mixed $moral
     */
    public function setMoral($moral)
    {
        $this->moral = $moral;
    }

    /**
     * @return mixed
     */
    public function getHonra()
    {
        return $this->honra;
    }

    /**
     * @param mixed $honra
     */
    public function setHonra($honra)
    {
        $this->honra = $honra;
    }

    /**
     * @return mixed
     */
    public function getListaNegra()
    {
        return $this->listaNegra;
    }

    /**
     * @param mixed $listaNegra
     */
    public function setListaNegra($listaNegra)
    {
        $this->listaNegra = $listaNegra;
    }

    /**
     * @return mixed
     */
    public function getListaBranca()
    {
        return $this->listaBranca;
    }

    /**
     * @param mixed $listaBranca
     */
    public function setListaBranca($listaBranca)
    {
        $this->listaBranca = $listaBranca;
    }

    /**
     * @return mixed
     */
    public function getUnidadesMilitares()
    {
        return $this->unidadesMilitares;
    }

    /**
     * @param mixed $unidadesMilitares
     */
    public function setUnidadesMilitares($unidadesMilitares)
    {
        $this->unidadesMilitares = $unidadesMilitares;
    }

    /**
     * @return mixed
     */
    public function getFundacao()
    {
        return $this->fundacao;
    }

    /**
     * @param mixed $fundacao
     */
    public function setFundacao($fundacao)
    {
        $this->fundacao = $fundacao;
    }


}