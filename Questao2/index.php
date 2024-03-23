<?php

require_once 'model/Aluno.php';
require_once 'model/Curso.php';
require_once 'model/Turma.php';

$curso = new Curso("TADS", 18);

$turma = new Turma(2024, $curso);

$aluno1 = new Aluno("Otavio", 19);
$aluno2 = new Aluno("Jucelino", 17);

$turma->matricular($aluno1);
$turma->matricular($aluno2);

foreach($turma->getAlunos() as $aluno)
{
    echo $aluno->getNome();
}