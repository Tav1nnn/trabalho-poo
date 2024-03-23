<?php

class Estadio 
{
    private string $nomeEstadio;
    private int $capacidadeEstadio;

    function __construct(string $nomeEstadio, int $capacidadeEstadio)
    {
        $this->nomeEstadio = $nomeEstadio;
        $this->capacidadeEstadio = $capacidadeEstadio;
    }
    
    public function getNomeEstadio():string
    {
        return $this->nomeEstadio;
    }
    
    public function getCapacidadeEstadio():int
    {
        return $this->capacidadeEstadio;
    }
}