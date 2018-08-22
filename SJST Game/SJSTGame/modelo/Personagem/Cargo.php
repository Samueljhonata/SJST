<?php

class Cargo
{
    private $titulo;
    private $inicioMandato;
    private $fimMandato;
    private $tipo;
    private $gabinete;

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getInicioMandato()
    {
        return $this->inicioMandato;
    }

    /**
     * @param mixed $inicioMandato
     */
    public function setInicioMandato($inicioMandato)
    {
        $this->inicioMandato = $inicioMandato;
    }

    /**
     * @return mixed
     */
    public function getFimMandato()
    {
        return $this->fimMandato;
    }

    /**
     * @param mixed $fimMandato
     */
    public function setFimMandato($fimMandato)
    {
        $this->fimMandato = $fimMandato;
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
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getGabinete()
    {
        return $this->gabinete;
    }

    /**
     * @param mixed $gabinete
     */
    public function setGabinete($gabinete)
    {
        $this->gabinete = $gabinete;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        $ano = date('Y') - 267;
        $data = new DateTime($ano."-".date('m-d'));
        /*echo "<br>".$data->format('d/m/Y')."<br>";
        echo $this->fimMandato->format('d/m/Y')."<br>";
        echo $this->fimMandato->diff($data)->format('%R%a');*/

        if($this->fimMandato->diff($data)->format('%R%a') > 0){
            return true;
        }else {
            return false;
        }
    }



}