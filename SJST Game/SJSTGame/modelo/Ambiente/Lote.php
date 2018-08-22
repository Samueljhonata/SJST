<?php

class Lote
{
    private $id;
    private $povoacao;
    private $proprietario;
    private $localizacaoX;
    private $localizacaoY;
    private $edificioConstruido;
    private $tipoLote;

    /**
     * Lote constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

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
    public function getPovoacao()
    {
        return $this->povoacao;
    }

    /**
     * @param mixed $povoacao
     */
    public function setPovoacao($povoacao)
    {
        $this->povoacao = $povoacao;
    }

    /**
     * @return mixed
     */
    public function getProprietario()
    {
        return $this->proprietario;
    }

    /**
     * @param mixed $proprietario
     */
    public function setProprietario($proprietario)
    {
        $this->proprietario = $proprietario;
    }

    /**
     * @return mixed
     */
    public function getLocalizacaoX()
    {
        return $this->localizacaoX;
    }

    /**
     * @param mixed $localizacaoX
     */
    public function setLocalizacaoX($localizacaoX)
    {
        $this->localizacaoX = $localizacaoX;
    }

    /**
     * @return mixed
     */
    public function getLocalizacaoY()
    {
        return $this->localizacaoY;
    }

    /**
     * @param mixed $localizacaoY
     */
    public function setLocalizacaoY($localizacaoY)
    {
        $this->localizacaoY = $localizacaoY;
    }

    /**
     * @return mixed
     */
    public function getEdificioConstruido()
    {
        return $this->edificioConstruido;
    }

    /**
     * @param mixed $edificioConstruido
     */
    public function setEdificioConstruido($edificioConstruido)
    {
        $this->edificioConstruido = $edificioConstruido;
    }

    /**
     * @return mixed
     */
    public function getTipoLote()
    {
        return $this->tipoLote;
    }

    /**
     * @param mixed $tipoLote
     */
    public function setTipoLote($tipoLote)
    {
        $this->tipoLote = $tipoLote;
    } //se é Governo, Igreja ou Privado

}