<?php

require_once 'model/Time.php';
require_once 'model/Estadio.php';
require_once 'model/Campeonato.php';

$neoQuimica = new Estadio('Neo Quimica Arena', 40000);
$vilaBelmiro = new Estadio('Vila Belmiro', 4999);

$corinthians = new Time('Corinthians', 'Timão', $neoQuimica);
$santos = new Time('Santos', '4 eras', $vilaBelmiro);

$paulistao = new Campeonato('Paulistão', 2024);

$paulistao->inscrever($corinthians);
$paulistao->inscrever($santos);

$paulistao->setCampeao($corinthians);

foreach($paulistao->getTimes() as $time)
{
    echo $time->getNome();
}
