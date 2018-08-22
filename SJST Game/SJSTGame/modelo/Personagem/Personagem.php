<?php
require_once("Perfil.php");
require_once("Correio.php");
require_once("CargoFamilia.php");
require_once("Conquistas.php");
require_once("MinhasHabilidades.php");
require_once("FaseVida.php");
require_once ("StatusSocial.php");
require_once ("Agenda.php");


class Personagem
{
    private $id;
    private $nome;
    private $perfil;
    private $inventario;
    private $correio;
    private $statusSocial;
    private $agenda;
    private $meusCargos;
    private $faseVida;
    private $fome;
    private $saude;
    private $energia;
    private $diversao;
    private $amigos;
    private $habilidades;
    private $notifCarta;
    private $notifEvento;
    private $situacao;

    /**
     * Personagem constructor.
     */
    public function __construct($id)
    {
        $this->id = $id;
        $this->perfil = new Perfil();
    }

    /*public function __construct($id, $nome, $perfil, $inventario, $correio, $statusSocial, $agenda, $meusCargos)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->perfil = $perfil;
        $this->inventario = $inventario;
        $this->correio = $correio;
        $this->statusSocial = $statusSocial;
        $this->agenda = $agenda;
        $this->meusCargos = $meusCargos;
    }*/

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @return mixed
     */
    public function getInventario()
    {
        return $this->inventario;
    }

    /**
     * @return mixed
     */
    public function getCorreio()
    {
        return $this->correio;
    }

    /**
     * @return mixed
     */
    public function getStatusSocial()
    {
        return $this->statusSocial;
    }

    /**
     * @return mixed
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * @return mixed
     */
    public function getMeusCargos()
    {
        return $this->meusCargos;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }

    /**
     * @param mixed $inventario
     */
    public function setInventario($inventario)
    {
        $this->inventario = $inventario;
    }

    /**
     * @param mixed $correio
     */
    public function setCorreio($correio)
    {
        $this->correio = $correio;
    }

    /**
     * @param mixed $statusSocial
     */
    public function setStatusSocial($statusSocial)
    {
        $this->statusSocial = $statusSocial;
    }

    /**
     * @param mixed $agenda
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
    }

    /**
     * @param mixed $meusCargos
     */
    public function setMeusCargos($meusCargos)
    {
        $this->meusCargos = $meusCargos;
    }

    /**
     * @return mixed
     */
    public function getFaseVida()
    {
        return $this->faseVida;
    }

    /**
     * @param mixed $faseVida
     */
    public function setFaseVida($faseVida)
    {
        $this->faseVida = $faseVida;
    }

    /**
     * @return mixed
     */
    public function getFome()
    {
        return $this->fome;
    }

    /**
     * @param mixed $fome
     */
    public function setFome($fome)
    {
        $this->fome = $fome;
    }

    /**
     * @return mixed
     */
    public function getSaude()
    {
        return $this->saude;
    }

    /**
     * @param mixed $saude
     */
    public function setSaude($saude)
    {
        $this->saude = $saude;
    }

    /**
     * @return mixed
     */
    public function getEnergia()
    {
        return $this->energia;
    }

    /**
     * @param mixed $energia
     */
    public function setEnergia($energia)
    {
        $this->energia = $energia;
    }

    /**
     * @return mixed
     */
    public function getDiversao()
    {
        return $this->diversao;
    }

    /**
     * @param mixed $diversao
     */
    public function setDiversao($diversao)
    {
        $this->diversao = $diversao;
    }

    public function getHumor(){
        return ($this->saude + $this->fome + $this->energia + $this->diversao) / 4;

    }

    /**
     * @return mixed
     */
    public function getAmigos()
    {
        return $this->amigos;
    }

    /**
     * @param mixed $amigos
     */
    public function setAmigos($amigos)
    {
        $this->amigos = $amigos;
    }

    /**
     * @return mixed
     */
    public function getHabilidades()
    {
        return $this->habilidades;
    }

    /**
     * @param mixed $habilidades
     */
    public function setHabilidades($habilidades)
    {
        $this->habilidades = $habilidades;
    }

    /**
     * @return mixed
     */
    public function getNotifCarta()
    {
        return $this->notifCarta;
    }

    /**
     * @param mixed $notifCarta
     */
    public function setNotifCarta($notifCarta)
    {
        $this->notifCarta = $notifCarta;
    }

    /**
     * @return mixed
     */
    public function getNotifEvento()
    {
        return $this->notifEvento;
    }

    /**
     * @param mixed $notifEvento
     */
    public function setNotifEvento($notifEvento)
    {
        $this->notifEvento = $notifEvento;
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