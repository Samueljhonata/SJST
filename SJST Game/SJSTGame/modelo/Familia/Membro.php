<?php

class Membro
{
    private $personagem;
    private $entrada;
    private $situacao;

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
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * @param mixed $entrada
     */
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }


}