<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Code&display=swap');
    body {
        font-family: 'Fira Code', monospace;
    }
</style>

<?php

use App\Challenges\Challenge;
use App\Challenges\Challenge1000;

require __DIR__."/../vendor/autoload.php";

$php1000 = new Challenge1000('Hello World!');

$php1000->entriesOutputs->addEntries('');
$php1000->entriesOutputs->addOutputs('Hello World!');

$php1000->getChallengeInfo();
echo $php1000->checkUserOutput('', $php1000->main());