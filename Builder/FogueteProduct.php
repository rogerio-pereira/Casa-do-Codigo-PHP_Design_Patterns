<?php

namespace Builder;

class FogueteProduct
{
    protected $litrosCombustivel;
    protected $modelo;
    protected $numeroMotores;
    protected $numeroLugares;

    public function __toString() : string
    {
        $result = "Foguete Model: ".$this->getModelo()."<br/>\n";
        $result .= "Litros do tanque: ".$this->getLitrosCombustivel()."<br/>\n";
        $result .= "Número de motores: ".$this->getNumeroMotores()."<br/>\n";
        $result .= "Número de lugares: ".$this->getNumeroLugares()."<br/>\n";
    
        return $result;
    }

    /**
     * Get the value of litrosCombustivel
     */ 
    public function getLitrosCombustivel() : float
    {
        return $this->litrosCombustivel;
    }

    /**
     * Set the value of litrosCombustivel
     *
     * @return  self
     */ 
    public function setLitrosCombustivel(float $litrosCombustivel)
    {
        $this->litrosCombustivel = $litrosCombustivel;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo() : string 
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo(string $modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of numeroMotores
     */ 
    public function getNumeroMotores() : int
    {
        return $this->numeroMotores;
    }

    /**
     * Set the value of numeroMotores
     *
     * @return  self
     */ 
    public function setNumeroMotores(int $numeroMotores)
    {
        $this->numeroMotores = $numeroMotores;

        return $this;
    }

    /**
     * Get the value of numeroLugares
     */ 
    public function getNumeroLugares() : int
    {
        return $this->numeroLugares;
    }

    /**
     * Set the value of numeroLugares
     *
     * @return  self
     */ 
    public function setNumeroLugares(int $numeroLugares)
    {
        $this->numeroLugares = $numeroLugares;

        return $this;
    }
}