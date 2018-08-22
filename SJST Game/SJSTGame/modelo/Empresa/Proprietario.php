<?php

class Proprietario
{
    private $personagem;
    private $acoes;

    /**
     * @return mixed
     */
    public function getPersonagem()
    {
        return $this->personagem;
    }

    /**
     * @param mixed $personagem
     */
    public function setPersonagem($personagem)
    {
        $this->personagem = $personagem;
    }

    /**
     * @return mixed
     */
    public function getAcoes()
    {
        return $this->acoes;
    }

    /**
     * @param mixed $acoes
     */
    public function setAcoes($acoes)
    {
        $this->acoes = $acoes;
    }


}