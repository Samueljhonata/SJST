<?php

class ContaBancaria
{
    private $dono;
    private $dataCriacao;
    private $saldo;
    private $historico;
    private $emprestimos;
    private $hipotecas;
    private $penhoras;

    /**
     * @return mixed
     */
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * @param mixed $dono
     */
    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * @param mixed $dataCriacao
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($moeda, $submoeda)
    {
        $this->saldo = array($moeda, $submoeda);
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

    /**
     * @return mixed
     */
    public function getEmprestimos()
    {
        return $this->emprestimos;
    }

    /**
     * @param mixed $emprestimos
     */
    public function setEmprestimos($emprestimos)
    {
        $this->emprestimos = $emprestimos;
    }

    /**
     * @return mixed
     */
    public function getHipotecas()
    {
        return $this->hipotecas;
    }

    /**
     * @param mixed $hipotecas
     */
    public function setHipotecas($hipotecas)
    {
        $this->hipotecas = $hipotecas;
    }

    /**
     * @return mixed
     */
    public function getPenhoras()
    {
        return $this->penhoras;
    }

    /**
     * @param mixed $penhoras
     */
    public function setPenhoras($penhoras)
    {
        $this->penhoras = $penhoras;
    }



}