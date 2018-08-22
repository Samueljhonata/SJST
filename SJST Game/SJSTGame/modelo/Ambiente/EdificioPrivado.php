<?php

abstract class EdificioPrivado extends Lote
{
    private $usufrutuario;
    private $alugado;
    private $alugar;
    private $inquilino;
    private $precoAluguel;
    private $aVenda;
    private $precoVenda;

    /**
     * @return mixed
     */
    public function getUsufrutuario()
    {
        return $this->usufrutuario;
    }

    /**
     * @param mixed $usufrutuario
     */
    public function setUsufrutuario($usufrutuario)
    {
        $this->usufrutuario = $usufrutuario;
    }

    /**
     * @return mixed
     */
    public function isAlugado()
    {
        return $this->alugado;
    }

    /**
     * @param mixed $alugado
     */
    public function setAlugado($alugado)
    {
        $this->alugado = $alugado;
    }

    /**
     * @return mixed
     */
    public function getAlugar()
    {
        return $this->alugar;
    }

    /**
     * @param mixed $alugar
     */
    public function setAlugar($alugar)
    {
        $this->alugar = $alugar;
    }

    /**
     * @return mixed
     */
    public function getInquilino()
    {
        return $this->inquilino;
    }

    /**
     * @param mixed $inquilino
     */
    public function setInquilino($inquilino)
    {
        $this->inquilino = $inquilino;
    }

    /**
     * @return mixed
     */
    public function getPrecoAluguel()
    {
        return $this->precoAluguel;
    }

    /**
     * @param mixed $precoAluguel
     */
    public function setPrecoAluguel($precoAluguel)
    {
        $this->precoAluguel = $precoAluguel;
    }

    /**
     * @return mixed
     */
    public function isAVenda()
    {
        return $this->aVenda;
    }

    /**
     * @param mixed $aVenda
     */
    public function setAVenda($aVenda)
    {
        $this->aVenda = $aVenda;
    }

    /**
     * @return mixed
     */
    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }

    /**
     * @param mixed $precoVenda
     */
    public function setPrecoVenda($precoVenda)
    {
        $this->precoVenda = $precoVenda;
    }


}