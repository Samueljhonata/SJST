<?php

class Patente
{
    private $nome;
    private $ptsStatusSocial;
    private $data;
    private $concedidoPor;
    private $img;

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
    public function getPtsStatusSocial()
    {
        return $this->ptsStatusSocial;
    }

    /**
     * @param mixed $ptsStatusSocial
     */
    public function setPtsStatusSocial($ptsStatusSocial)
    {
        $this->ptsStatusSocial = $ptsStatusSocial;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getConcedidoPor()
    {
        return $this->concedidoPor;
    }

    /**
     * @param mixed $concedidoPor
     */
    public function setConcedidoPor($concedidoPor)
    {
        $this->concedidoPor = $concedidoPor;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }


}