<?php

class Agenda
{
    private $eventos;
    private $notas;
    private $agendado;

    /**
     * @return mixed
     */
    public function getEventos()
    {
        return $this->eventos;
    }

    /**
     * @param mixed $eventos
     */
    public function setEventos($eventos)
    {
        $this->eventos = $eventos;
    }

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param mixed $notas
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;
    }

    /**
     * @return mixed
     */
    public function getAgendado()
    {
        return $this->agendado;
    }

    /**
     * @param mixed $agendado
     */
    public function setAgendado($agendado)
    {
        $this->agendado = $agendado;
    }


}