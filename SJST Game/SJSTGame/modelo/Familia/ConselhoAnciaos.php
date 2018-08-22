<?php

class ConselhoAnciaos
{
    private $patriarca;
    private $herdeiro;
    private $anciaos;

    /**
     * @return mixed
     */
    public function getPatriarca()
    {
        return $this->patriarca;
    }

    /**
     * @param mixed $patriarca
     */
    public function setPatriarca($patriarca)
    {
        $this->patriarca = $patriarca;
    }

    /**
     * @return mixed
     */
    public function getHerdeiro()
    {
        return $this->herdeiro;
    }

    /**
     * @param mixed $herdeiro
     */
    public function setHerdeiro($herdeiro)
    {
        $this->herdeiro = $herdeiro;
    }

    /**
     * @return mixed
     */
    public function getAnciaos()
    {
        return $this->anciaos;
    }

    /**
     * @param mixed $anciaos
     */
    public function setAnciaos($anciaos)
    {
        $this->anciaos = $anciaos;
    }


}