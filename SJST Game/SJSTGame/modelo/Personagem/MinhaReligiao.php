<?php

class MinhaReligiao
{
    private $igreja;
    private $niveldeFe;
    private $pontosdeFe;
    private $ptsFeProxNivel;
    private $historico;
    private $requisiosPNivel;

    /**
     * @return mixed
     */
    public function getIgreja()
    {
        return $this->igreja;
    }

    /**
     * @param mixed $igreja
     */
    public function setIgreja($igreja)
    {
        $this->igreja = $igreja;
    }

    /**
     * @return mixed
     */
    public function getNiveldeFe()
    {
        return $this->niveldeFe;
    }

    /**
     * @param mixed $niveldeFe
     */
    public function setNiveldeFe($niveldeFe)
    {
        $this->niveldeFe = $niveldeFe;
    }

    /**
     * @return mixed
     */
    public function getPontosdeFe()
    {
        return $this->pontosdeFe;
    }

    /**
     * @param mixed $pontosdeFe
     */
    public function setPontosdeFe($pontosdeFe)
    {
        $this->pontosdeFe = $pontosdeFe;
    }

    /**
     * @return mixed
     */
    public function getPtsFeProxNivel()
    {
        return $this->ptsFeProxNivel;
    }

    /**
     * @param mixed $ptsFeProxNivel
     */
    public function setPtsFeProxNivel($ptsFeProxNivel)
    {
        $this->ptsFeProxNivel = $ptsFeProxNivel;
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
    public function getRequisiosPNivel()
    {
        return $this->requisiosPNivel;
    }

    /**
     * @param mixed $requisiosPNivel
     */
    public function setRequisiosPNivel($requisiosPNivel)
    {
        $this->requisiosPNivel = $requisiosPNivel;
    }



}