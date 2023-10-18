<?php

namespace App\Challenges;

class Challenge
{
    private static int $CHALLENGENUMBER = 1000;
    protected string $challengeTitle;
    protected array $entryAndOutput;
    protected mixed $userOutput;


    public function __construct(string $title, array $entryAndOutput)
    {
        $this->challengeTitle = $title;

        foreach ($entryAndOutput as $entry => $output) {
            $this->entryAndOutput[$entry] = $output;
        }
    }


    public function getChallengeInfo()
    {
        echo "<br>" . self::$CHALLENGENUMBER . " - " . $this->challengeTitle;

        echo "<hr>";
        
        echo "<h2>Entry => Output</h2>";
        foreach ($this->entryAndOutput as $entry => $output) {
            echo "<li>". $entry . " => " . $output . "</li>";
        }

        echo "<hr>";

        self::$CHALLENGENUMBER++;
    }


    public function getUserOutput()
    {
        return $this->userOutput;
    }


    public function setUserOutput(mixed $value)
    {
        $this->userOutput = $value;
    }

}
