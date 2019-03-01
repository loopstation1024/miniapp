<?php
namespace model;

class Producto
{
    private $id;
    private $telefono;
    private $tarifa;
    private $cuotaMensual;
    private $tipoServicio;
    private $idCliente;
    
    public function __construct()
    {
        
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getTelefono()
    {
        return $this->telefono;
    }
    
    public function getTarifa()
    {
        return $this->tarifa;
    }
    
    public function getCuotaMensual()
    {
        return $this->cuotaMensual;
    }
    
    public function getTipoServicio()
    {
        return $this->tipoServicio;
    }
    
    public function getIdCliente()
    {
        return $this->idCliente;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    }
    
    public function setCuotaMensual($cuotaMensual)
    {
        $this->cuotaMensual = $cuotaMensual;
    }
    
    public function setTipoServicio($tipoServicio)
    {
        $this->tipoServicio = $tipoServicio;
    }
    
    public function setIdCliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }  
}

