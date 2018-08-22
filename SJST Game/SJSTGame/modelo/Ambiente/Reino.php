<?php

class Reino
{
    private $idReino;
    private $capitalReino;
    private $regioes;
    private $habitantes;
    private $presentes;
    private $conselhoReal;

    /**
     * @return mixed
     */
    public function getIdReino()
    {
        return $this->idReino;
    }

    /**
     * @param mixed $idReino
     */
    public function setIdReino($idReino)
    {
        $this->idReino = $idReino;
    }

    /**
     * @return mixed
     */
    public function getCapitalReino()
    {
        return $this->capitalReino;
    }

    /**
     * @param mixed $capitalReino
     */
    public function setCapitalReino($capitalReino)
    {
        $this->capitalReino = $capitalReino;
    }

    /**
     * @return mixed
     */
    public function getRegioes()
    {
        return $this->regioes;
    }

    /**
     * @param mixed $regioes
     */
    public function setRegioes($regioes)
    {
        $this->regioes = $regioes;
    }

    /**
     * @return mixed
     */
    public function getHabitantes()
    {
        return $this->habitantes;
    }

    /**
     * @param mixed $habitantes
     */
    public function setHabitantes($habitantes)
    {
        $this->habitantes = $habitantes;
    }

    /**
     * @return mixed
     */
    public function getPresentes()
    {
        return $this->presentes;
    }

    /**
     * @param mixed $presentes
     */
    public function setPresentes($presentes)
    {
        $this->presentes = $presentes;
    }

    /**
     * @return mixed
     */
    public function getConselhoReal()
    {
        return $this->conselhoReal;
    }

    /**
     * @param mixed $conselhoReal
     */
    public function setConselhoReal($conselhoReal)
    {
        $this->conselhoReal = $conselhoReal;
    }


}