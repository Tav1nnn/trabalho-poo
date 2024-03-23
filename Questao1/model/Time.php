<?php

require_once 'Estadio.php';

class Time 
{
    private string $nome;
    private string $apelido;
    private Estadio $estadio;

    function __construct(string $nome, string $apelido, Estadio $estadio)
    {
        $this->nome = $nome;
        $this->apelido = $apelido;
        $this->estadio = $estadio;
    }

    public function getNome():string 
    {
        return $this->nome;
    }

    public function getApelido():string
    {
        return $this->apelido;
    }
    
    public function getEstadio():Estadio
    {
        return $this->estadio;
    }
}