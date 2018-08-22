<?php
require_once("MinhaReligiao.php");
class Perfil
{
    private $dataNascimento;
    private $povoacaoNatal;
    private $localizacaoAtual;
    private $residencia;
    private $familias;
    private $amigos;
    private $minhaReligiao;

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function getDataNascimentoFormatada(){
        return $this->dataNascimento->format('d/m/Y');
    }
    /**
     * @param mixed $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return mixed
     */
    public function getPovoacaoNatal()
    {
        return $this->povoacaoNatal;
    }

    /**
     * @param mixed $povoacaoNatal
     */
    public function setPovoacaoNatal($povoacaoNatal)
    {
        $this->povoacaoNatal = $povoacaoNatal;
    }

    /**
     * @return mixed
     */
    public function getLocalizacaoAtual()
    {
        return $this->localizacaoAtual;
    }

    /**
     * @param mixed $localizacaoAtual
     */
    public function setLocalizacaoAtual($localizacaoAtual)
    {
        $this->localizacaoAtual = $localizacaoAtual;
    }

    /**
     * @return mixed
     */
    public function getResidencia()
    {
        return $this->residencia;
    }

    /**
     * @param mixed $residencia
     */
    public function setResidencia($residencia)
    {
        $this->residencia = $residencia;
    }

    /**
     * @return mixed
     */
    public function getFamilias()
    {
        return $this->familias;
    }

    /**
     * @param mixed $familias
     */
    public function setFamilias($familias)
    {
        $this->familias = $familias;
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
    public function getMinhaReligiao()
    {
        return $this->minhaReligiao;
    }

    /**
     * @param mixed $minhaReligiao
     */
    public function setMinhaReligiao($minhaReligiao)
    {
        $this->minhaReligiao = $minhaReligiao;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        $ano = date('Y') - 267;
        $data = new DateTime($ano."-".date('m-d'));
        $data = date_create($ano.'-05-05');
        //echo $data->format('d/m/Y')." - ".$this->getDataNascimentoFormatada()."<br>";

        //echo  $data->format('d/m/Y');
        //echo $data/*." - ".$this->dataNascimento*/;

        return $this->dataNascimento->diff($data)->format('%a');
    }


}