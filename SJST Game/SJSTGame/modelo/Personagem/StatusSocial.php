<?php
require_once ("FatoresSS.php");
class StatusSocial
{
    private $PROX = array(100,200,300,400,500,600,700,800,900,1000,1100);

    private $nivel;
    private $pontos;
    private $titulos;
    private $estamento;
    private $classe;
    private $descricaoClasse;
    private $bonusDeClasse;
    private $penalidades;
    private $bonus;

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getPontos()
    {
        return $this->pontos;
    }

    /**
     * @param mixed $pontos
     */
    public function setPontos($pontos)
    {
        $this->pontos = $pontos;
    }

    /**
     * @return mixed
     */
    public function getTitulos()
    {
        return $this->titulos;
    }

    /**
     * @param mixed $titulos
     */
    public function setTitulos($titulos)
    {
        $this->titulos = $titulos;
    }

    /**
     * @return mixed
     */
    public function getEstamento()
    {
        return $this->estamento;
    }

    /**
     * @param mixed $estamento
     */
    public function setEstamento($estamento)
    {
        $this->estamento = $estamento;
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    /**
     * @return mixed
     */
    public function getDescricaoClasse()
    {
        return $this->descricaoClasse;
    }

    /**
     * @param mixed $descricaoClasse
     */
    public function setDescricaoClasse($descricaoClasse)
    {
        $this->descricaoClasse = $descricaoClasse;
    }

    /**
     * @return mixed
     */
    public function getBonusDeClasse()
    {
        return $this->bonusDeClasse;
    }

    /**
     * @param mixed $bonusDeClasse
     */
    public function setBonusDeClasse($bonusDeClasse)
    {
        $this->bonusDeClasse = $bonusDeClasse;
    }

    public function getPontosProxNivel(){
        return $this->PROX[$this->nivel];

    }

    public function getPontosNivelAtual(){
        return $this->PROX[$this->nivel-1];

    }

    public function getPontosParaProxNivel(){
        $porcProxNivel = ($this->getPontos() - $this->getPontosNivelAtual() ) / ($this->getPontosProxNivel() - $this->getPontosNivelAtual()) * 100;
        //echo $this->getPontos()." - ".$this->getPontosNivelAtual()." ) / (".$this->getPontosProxNivel()." - ".$this->getPontosNivelAtual()."=".$porcProxNivel;

        //echo $personagemPrincipal->getStatusSocial()->getPontos()."/ ".$personagemPrincipal->getStatusSocial()->getPontosProxNivel()." = ".$porcProxNivel;
        return $porcProxNivel;

    }

    /**
     * @return mixed
     */
    public function getPenalidades()
    {
        return $this->penalidades;
    }

    /**
     * @param mixed $penalidades
     */
    public function setPenalidades($penalidades)
    {
        $this->penalidades = $penalidades;
    }

    /**
     * @return mixed
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * @param mixed $bonus
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }



}