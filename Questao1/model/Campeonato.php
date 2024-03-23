<?php

require_once 'Time.php';

class Campeonato
{
    private string $nome;
    private int $ano;
    private array $times;
    private Time $campeao;

    function __construct(string $nome, int $ano)
    {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->times = [];
    }

    public function inscrever(Time $time):void
    {
        if($this->validarInscricao($time)){
            array_push($this->times, $time);
        }
    }
    
    private function validarInscricao(Time $time):bool
    {
        return $time->getEstadio()->getCapacidadeEstadio() > 5000;
    }

    public function setCampeao(Time $time):void
    {
        $this->campeao = $time;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getAno():int
    {
        return $this->ano;
    }

    public function getTimes():array
    {
        return $this->times;
    }
}