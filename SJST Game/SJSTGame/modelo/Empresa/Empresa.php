<?php

class Empresa
{
    private $id;
    private $nome;
    private $proprietarios;
    private $conselhoAdministrativo;
    private $historia;
    private $avisos;
    private $eventos;
    private $inventario;
    private $titulos;

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
    public function getProprietarios()
    {
        return $this->proprietarios;
    }

    /**
     * @param mixed $proprietarios
     */
    public function setProprietarios($proprietarios)
    {
        $this->proprietarios = $proprietarios;
    }

    /**
     * @return mixed
     */
    public function getConselhoAdministrativo()
    {
        return $this->conselhoAdministrativo;
    }

    /**
     * @param mixed $conselhoAdministrativo
     */
    public function setConselhoAdministrativo($conselhoAdministrativo)
    {
        $this->conselhoAdministrativo = $conselhoAdministrativo;
    }

    /**
     * @return mixed
     */
    public function getHistoria()
    {
        return $this->historia;
    }

    /**
     * @param mixed $historia
     */
    public function setHistoria($historia)
    {
        $this->historia = $historia;
    }

    /**
     * @return mixed
     */
    public function getAvisos()
    {
        return $this->avisos;
    }

    /**
     * @param mixed $avisos
     */
    public function setAvisos($avisos)
    {
        $this->avisos = $avisos;
    }

    /**
     * @return mixed
     */
    public function getEventos()
    {
        return $this->eventos;
    }

    /**
     * @param mixed $eventos
     */
    public function setEventos($eventos)
    {
        $this->eventos = $eventos;
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
    public function getTitulos()
    {
        return $this->titulos;
    }

    /**
     * @param mixed $titulos
     */
    public function setTitulos($titulos)
    {
        $this->titulos = $titulos;
    }

}