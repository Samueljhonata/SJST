<?php
require_once ("Produto.php");
class CInventario
{
    private $moeda;
    private $submoeda;
    private $creditos;
    private $produtos;

    /**
     * @return mixed
     */
    public function getMoeda()
    {
        return $this->moeda;
    }

    /**
     * @param mixed $moeda
     */
    public function setMoeda($moeda)
    {
        $this->moeda = $moeda;
    }

    /**
     * @return mixed
     */
    public function getSubmoeda()
    {
        return $this->submoeda;
    }

    /**
     * @param mixed $submoeda
     */
    public function setSubmoeda($submoeda)
    {
        if($submoeda > 999){
            $valor = $submoeda - 1000;
            $this->moeda = $this->moeda + 1;
            $this->submoeda = $valor;
        }else {
            $this->submoeda = $submoeda;
        }
    }

    /**
     * @return mixed
     */
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * @param mixed $creditos
     */
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;
    }

    /**
     * @return mixed
     */
    public function getProdutos()
    {
        return $this->produtos;
    }

    /**
     * @param mixed $produtos
     */
    public function setProdutos($produtos)
    {
        $this->produtos = $produtos;
    }


}