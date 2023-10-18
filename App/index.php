<?php

use App\Challenges\Challenge;

require __DIR__."/../vendor/autoload.php";

$entryAndOutput = [
    '2' => 20,
    '62' => 60,
    '23' => 'legal',
];


$teste = new Challenge('Titulo', $entryAndOutput);

$teste->getChallengeInfo();

$outroTeste = new Challenge('Outro título', $entryAndOutput);

$outroTeste->getChallengeInfo();
