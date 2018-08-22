<?php

abstract class Edificio
{
    private $nome;
    private $tipoEdificio;
    private $dataConstrucao;
    private $descricao;
    private $aberto;
    private $imagem;

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
    public function getTipoEdificio()
    {
        return $this->tipoEdificio;
    }

    /**
     * @param mixed $tipoEdificio
     */
    public function setTipoEdificio($tipoEdificio)
    {
        $this->tipoEdificio = $tipoEdificio;
    }

    /**
     * @return mixed
     */
    public function getDataConstrucao()
    {
        return $this->dataConstrucao;
    }

    /**
     * @param mixed $dataConstrucao
     */
    public function setDataConstrucao($dataConstrucao)
    {
        $this->dataConstrucao = $dataConstrucao;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function isAberto()
    {
        return $this->aberto;
    }

    /**
     * @param mixed $aberto
     */
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    /**
     * @return mixed
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * @param mixed $imagem
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }


}