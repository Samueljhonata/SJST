<?php

class Povoacao
{
    const TIPO1 = "Aldeia";
    const TIPO2 = "Vila";
    const TIPO3 = "Cidade";
    const TIPO4 = "Metropole";
    private $idPovoacao;
    private $nome;
    private $municipio;
    private $regiao;
    private $reino;
    private $tipo;
    private $zonaUrbana;
    private $habitantes;
    private $presentes;

    /**
     * @return mixed
     */
    public function getIdPovoacao()
    {
        return $this->idPovoacao;
    }

    /**
     * @param mixed $idPovoacao
     */
    public function setIdPovoacao($idPovoacao)
    {
        $this->idPovoacao = $idPovoacao;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @return mixed
     */
    public function getRegiao()
    {
        return $this->regiao;
    }

    /**
     * @param mixed $regiao
     */
    public function setRegiao($regiao)
    {
        $this->regiao = $regiao;
    }

    /**
     * @return mixed
     */
    public function getReino()
    {
        return $this->reino;
    }

    /**
     * @param mixed $reino
     */
    public function setReino($reino)
    {
        $this->reino = $reino;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        switch ($tipo){
            case 1:
                $this->tipo = self::TIPO1;
                break;
            case 2:
                $this->tipo = self::TIPO2;
                break;
            case 3:
                $this->tipo = self::TIPO3;
                break;
            case 4:
                $this->tipo = self::TIPO4;
                break;
        }
    }

    /**
     * @param mixed $zonaUrbana
     */
    public function setZonaUrbana($zonaUrbana)
    {
        $this->zonaUrbana = $zonaUrbana;
    }

    /**
     * @return mixed
     */
    public function getZonaUrbana()
    {
        return $this->zonaUrbana;
    }

    /**
     * @return mixed
     */
    public function getHabitantes()
    {
        return $this->habitantes;
    }

    /**
     * @param mixed $habitantes
     */
    public function setHabitantes($habitantes)
    {
        $this->habitantes = $habitantes;
    }

    /**
     * @return mixed
     */
    public function getPresentes()
    {
        return $this->presentes;
    }

    /**
     * @param mixed $presentes
     */
    public function setPresentes($presentes)
    {
        $this->presentes = $presentes;
    }


}