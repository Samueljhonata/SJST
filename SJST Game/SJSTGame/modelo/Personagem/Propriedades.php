<?php

class Propriedades
{
    private $lotes;
    private $acres;

    /**
     * @return mixed
     */
    public function getLotes()
    {
        return $this->lotes;
    }

    /**
     * @param mixed $lotes
     */
    public function setLotes($lotes)
    {
        $this->lotes = $lotes;
    }

    /**
     * @return mixed
     */
    public function getAcres()
    {
        return $this->acres;
    }

    /**
     * @param mixed $acres
     */
    public function setAcres($acres)
    {
        $this->acres = $acres;
    }


}