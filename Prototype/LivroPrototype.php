<?php

namespace Prototype;

abstract class LivroPrototype
{
    protected $titulo;
    protected $assunto;
    protected $nomeTitular;

    abstract public function __clone();

    /**
     * Get the value of titulo
     */ 
    public function getTitulo() : string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo) : LivroPrototype
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of assunto
     */ 
    public function getAssunto() : string
    {
        return $this->assunto;
    }

    /**
     * Set the value of assunto
     *
     * @return  self
     */ 
    public function setAssunto($assunto) : LivroPrototype
    {
        $this->assunto = $assunto;

        return $this;
    }

    /**
     * Get the value of nomeTitular
     */ 
    public function getNomeTitular() : string
    {
        return $this->nomeTitular;
    }

    /**
     * Set the value of nomeTitular
     *
     * @return  self
     */ 
    public function setNomeTitular($nomeTitular) : LivroPrototype
    {
        $this->nomeTitular = $nomeTitular;

        return $this;
    }
}