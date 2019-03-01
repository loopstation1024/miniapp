<?php
namespace model;

class Consumo
{   
    private $importe;
    private $consumoVoz;
    private $consumoDatos;
    private $idProducto;
    
    public function __construct()
    {
        
    }

    public function getImporte()
    {
        return $this->importe;
    }

    public function getConsumoVoz()
    {
        return $this->consumoVoz;
    }

    public function getConsumoDatos()
    {
        return $this->consumoDatos;
    }
    
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    public function setImporte($importe)
    {
        $this->importe = $importe;
    }

    public function setConsumoVoz($consumoVoz)
    {
        $this->consumoVoz = $consumoVoz;
    }

    public function setConsumoDatos($consumoDatos)
    {
        $this->consumoDatos = $consumoDatos;
    }
    
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;
    } 
}

