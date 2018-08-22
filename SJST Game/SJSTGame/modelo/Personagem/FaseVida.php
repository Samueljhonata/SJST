<?php
//require_once ("FasesDaVida.php");
class FaseVida
{
    const NIVEL1 = "Recém Nascido";
    const NIVEL2 = "Criança";
    const NIVEL3 = "Adolescente";
    const NIVEL4 = "Jovem Adulto";
    const NIVEL5 = "Adulto";
    const NIVEL6 = "Idoso";
    private $FATORFORCA = array(0,1,7,10,12,3);
    private $FATORCARISMA = array(0,10,5,7,7,8);
    private $FATORINTELIGENCIA = array(0,1,3,5,10,15);
    private $FATORAGILIDADE = array(0,10,8,8,7,3);

    private $fase;
    private $fatorForca;
    private $fatorCarisma;
    private $fatorInteligencia;
    private $fatorAgilidade;
    private $fatorForcaProx;
    private $fatorCarismaProx;
    private $fatorInteligenciaProx;
    private $fatorAgilidadeProx;

    /**
     * @return mixed
     */
    public function getNivel(){
        return $this->fase;
    }

    public function getFase()
    {
        switch ($this->fase){
            case 1:
                return self::NIVEL1;
                break;
            case 2:
                return self::NIVEL2;
                break;
            case 3:
                return self::NIVEL3;
                break;
            case 4:
                return self::NIVEL4;
                break;
            case 5:
                return self::NIVEL5;
                break;
            case 6:
                return self::NIVEL6;
                break;
        }
    }

    /**
     * @param mixed $fase
     */
    public function setFase($fase)
    {
        $this->fase = $fase;
    }

    /**
     * @return mixed
     */
    public function getFatorForca()
    {
        return $this->fatorForca;
    }

    /**
     * @param mixed $fatorForca
     */
    public function setFatorForca($fatorForca)
    {
        $this->fatorForca = $fatorForca;
    }

    /**
     * @return mixed
     */
    public function getFatorCarisma()
    {
        return $this->fatorCarisma;
    }

    /**
     * @param mixed $fatorCarisma
     */
    public function setFatorCarisma($fatorCarisma)
    {
        $this->fatorCarisma = $fatorCarisma;
    }

    /**
     * @return mixed
     */
    public function getFatorInteligencia()
    {
        return $this->fatorInteligencia;
    }

    /**
     * @param mixed $fatorInteligencia
     */
    public function setFatorInteligencia($fatorInteligencia)
    {
        $this->fatorInteligencia = $fatorInteligencia;
    }

    /**
     * @return mixed
     */
    public function getFatorAgilidade()
    {
        return $this->fatorAgilidade;
    }

    /**
     * @param mixed $fatorAgilidade
     */
    public function setFatorAgilidade($fatorAgilidade)
    {
        $this->fatorAgilidade = $fatorAgilidade;
    }

    /**
     * @return mixed
     */
    public function getProximoNivel()
    {
        switch ($this->fase){
            case 1:
                return self::NIVEL2;
                break;
            case 2:
                return self::NIVEL3;
                break;
            case 3:
                return self::NIVEL4;
                break;
            case 4:
                return self::NIVEL5;
                break;
            case 5:
                return self::NIVEL6;
                break;
            case 6: return "Nenhuma";
                break;
        }
    }

    /**
     * @return mixed
     */
    public function getRequisitos()
    {
        return $this->requisitos;
    }

    /**
     * @return mixed
     */
    public function getFatorForcaProx()
    {
        if($this->fase < 6) return $this->FATORFORCA[$this->fase];
    }

    /**
     * @return mixed
     */
    public function getFatorCarismaProx()
    {
        if($this->fase < 6) return $this->FATORCARISMA[$this->fase];
    }

    /**
     * @return mixed
     */
    public function getFatorInteligenciaProx()
    {
        if($this->fase < 6) return $this->FATORINTELIGENCIA[$this->fase];
    }

    /**
     * @return mixed
     */
    public function getFatorAgilidadeProx()
    {
        if($this->fase < 6) return $this->FATORAGILIDADE[$this->fase];
    }



}