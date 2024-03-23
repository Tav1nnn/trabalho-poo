<?php

class Aluno 
{
    private string $nome;
    private int $idade;

    function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome():string
    {
        return $this->nome;
    }
    
    public function getIdade():int
    {
        return $this->idade;
    }
}