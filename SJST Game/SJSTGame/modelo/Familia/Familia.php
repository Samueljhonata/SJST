<?php

class Familia
{
    private $id;
    private $Nome;
    private $propriedades;
    private $conselhoAnciaos;
    private $arvoreGenealogica;
    private $inventario;
    private $historia;
    private $avisos;
    private $membros;
    private $biblioteca;
    private $historico;

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
        return $this->Nome;
    }

    /**
     * @param mixed $Nome
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    /**
     * @return mixed
     */
    public function getPropriedades()
    {
        return $this->propriedades;
    }

    /**
     * @param mixed $propriedades
     */
    public function setPropriedades($propriedades)
    {
        $this->propriedades = $propriedades;
    }

    /**
     * @return mixed
     */
    public function getConselhoAnciaos()
    {
        return $this->conselhoAnciaos;
    }

    /**
     * @param mixed $conselhoAnciaos
     */
    public function setConselhoAnciaos($conselhoAnciaos)
    {
        $this->conselhoAnciaos = $conselhoAnciaos;
    }

    /**
     * @return mixed
     */
    public function getArvoreGenealogica()
    {
        return $this->arvoreGenealogica;
    }

    /**
     * @param mixed $arvoreGenealogica
     */
    public function setArvoreGenealogica($arvoreGenealogica)
    {
        $this->arvoreGenealogica = $arvoreGenealogica;
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
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * @param mixed $membros
     */
    public function setMembros($membros)
    {
        $this->membros = $membros;
    }

    /**
     * @return mixed
     */
    public function getBiblioteca()
    {
        return $this->biblioteca;
    }

    /**
     * @param mixed $biblioteca
     */
    public function setBiblioteca($biblioteca)
    {
        $this->biblioteca = $biblioteca;
    }

    /**
     * @return mixed
     */
    public function getHistorico()
    {
        return $this->historico;
    }

    /**
     * @param mixed $historico
     */
    public function setHistorico($historico)
    {
        $this->historico = $historico;
    }


}