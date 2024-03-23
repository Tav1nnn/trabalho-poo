<?php

require_once 'Curso.php';
require_once 'Aluno.php';

class Turma
{
    private int $ano;
    private Curso $curso;
    private array $alunos;

    public function __construct(int $ano, Curso $curso)
    {
        $this->alunos = [];
        $this->ano = $ano;
        $this->curso = $curso;
    }

    public function matricular(Aluno $aluno):void
    {
        if($this->validarMatricula($aluno))
        {
            array_push($this->alunos, $aluno);
        }
    }

    private function validarMatricula(Aluno $aluno):bool{
        return $aluno->getIdade()>= $this->curso->getIdadeMinima();
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function getCurso(): Curso
    {
        return $this->curso;
    }

    public function getAlunos(): array
    {
        return $this->alunos;
    }
}
