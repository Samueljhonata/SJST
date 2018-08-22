<?php
require_once ("Patente.php");
class Combatente extends Personagem
{
    private $coeficienteAtaque;
    private $coeficienteDefesa;
    private $patente;
    private $dataEntrada;
    private $situacaoExercito;
    private $unidadePertence;

    /**
     * @return mixed
     */
    public function getCoeficienteAtaque()
    {
        return $this->coeficienteAtaque;
    }

    /**
     * @param mixed $coeficienteAtaque
     */
    public function setCoeficienteAtaque($coeficienteAtaque)
    {
        $this->coeficienteAtaque = $coeficienteAtaque;
    }

    /**
     * @return mixed
     */
    public function getCoeficienteDefesa()
    {
        return $this->coeficienteDefesa;
    }

    /**
     * @param mixed $coeficienteDefesa
     */
    public function setCoeficienteDefesa($coeficienteDefesa)
    {
        $this->coeficienteDefesa = $coeficienteDefesa;
    }

    /**
     * @return mixed
     */
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * @param mixed $patente
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;
    }

    /**
     * @return mixed
     */
    public function getDataEntrada()
    {
        return $this->dataEntrada;
    }

    /**
     * @param mixed $dataEntrada
     */
    public function setDataEntrada($dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;
    }

    /**
     * @return mixed
     */
    public function getSituacaoExercito()
    {
        return $this->situacaoExercito;
    }

    /**
     * @param mixed $situacaoExercito
     */
    public function setSituacaoExercito($situacaoExercito)
    {
        $this->situacaoExercito = $situacaoExercito;
    }

    /**
     * @return mixed
     */
    public function getUnidadePertence()
    {
        return $this->unidadePertence;
    }

    /**
     * @param mixed $unidadePertence
     */
    public function setUnidadePertence($unidadePertence)
    {
        $this->unidadePertence = $unidadePertence;
    }


}