<?php

class UnidadeMilitar
{
    private $id;
    private $nome;
    private $tipo;
    private $comandante;
    private $pertence;
    private $cargoComandante;
    private $formacao;
    private $modoAtaque;
    private $honra;
    private $moral;
    private $inventario;

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
    public function getComandante()
    {
        return $this->comandante;
    }

    /**
     * @param mixed $comandante
     */
    public function setComandante($comandante)
    {
        $this->comandante = $comandante;
    }

    /**
     * @return mixed
     */
    public function getPertence()
    {
        return $this->pertence;
    }

    /**
     * @param mixed $pertence
     */
    public function setPertence($pertence)
    {
        $this->pertence = $pertence;
    }

    /**
     * @return mixed
     */
    public function getCargoComandante()
    {
        return $this->cargoComandante;
    }

    /**
     * @param mixed $cargoComandante
     */
    public function setCargoComandante($cargoComandante)
    {
        $this->cargoComandante = $cargoComandante;
    }

    /**
     * @return mixed
     */
    public function getFormacao()
    {
        return $this->formacao;
    }

    /**
     * @param mixed $formacao
     */
    public function setFormacao($formacao)
    {
        $this->formacao = $formacao;
    }

    /**
     * @return mixed
     */
    public function getModoAtaque()
    {
        return $this->modoAtaque;
    }

    /**
     * @param mixed $modoAtaque
     */
    public function setModoAtaque($modoAtaque)
    {
        $this->modoAtaque = $modoAtaque;
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


}