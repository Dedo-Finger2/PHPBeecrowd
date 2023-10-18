<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Code&display=swap');
    body {
        font-family: 'Fira Code', monospace;
    }
</style>

<?php

use App\Challenges\Challenge;
use App\Challenges\EntryOutput;

require __DIR__."/../vendor/autoload.php";

$teste = new Challenge('Titulo');

$teste->entriesOutputs->addEntries("1", "abc", "20");
$teste->entriesOutputs->addOutputs(1, 50, 30);

$teste->getChallengeInfo();
$teste->setUserOutput(1);
echo $teste->checkUserOutput("1");