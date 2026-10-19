<?php
// src/planta.php

class Planta
{
    // Propriedades
    private string $nome;
    private string $especie;
    private string $aguaPorDia;

    /* Construtor */
    public function __construct(string $nome, string $especie, int $aguaPorDia){

        $this->nome = $nome;
        $this->especie = $especie;

        $this->setAguaPorDia($aguaPorDia);
    }

    public function calcularAguaSemanal(): string
    {
        return ($this->aguaPorDia * 7 ) .' ml';
    } 

  /* getters */
  public function getNome(): string
  {
        return $this->nome;
  }
  
  public function getEspecie(): string
  {
        return $this->especie;
  }
  
  public function getAguaPorDia(): string 
  {
        return ($this->aguaPorDia) .' ml';
  }


  /* Setters */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

     public function setEspecie(string $especie): void
    {
        $this->especie = $especie;
    }

     public function setAguaPorDia(string $aguaPorDia): void
    {
        $this->aguaPorDia = $aguaPorDia;
    }

    
    

}
