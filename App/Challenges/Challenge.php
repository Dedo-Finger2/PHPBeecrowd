<?php

namespace App\Challenges;

class Challenge
{
    private static int $CHALLENGENUMBER = 1000;

    protected string $challengeTitle;
    protected mixed $userOutput;
    public EntryOutput $entriesOutputs;


    public function __construct(string $title)
    {
        $this->challengeTitle = $title;

        $this->entriesOutputs = new EntryOutput();
    }


    public function getChallengeInfo(): void
    {
        echo "<br><br><br>";

        echo "<hr>";
        echo self::$CHALLENGENUMBER . " - " . $this->challengeTitle;
        
        echo "<h2>Entry => Output</h2>";
        foreach ($this->entriesOutputs->getEntriesOutputs() as $entry => $output) {
            echo "<li>". $entry . " => " . $output . "</li>";
        }

        echo "<hr>";

        self::$CHALLENGENUMBER++;
    }


    public function getUserOutput(): mixed
    {
        return $this->userOutput;
    }


    public function setUserOutput(mixed $value)
    {
        $this->userOutput = $value;
    }

    public function checkUserOutput(mixed $userEntry): string
    {
        foreach ($this->entriesOutputs->getEntriesOutputs() as $entry => $output) {
            if ($this->userOutput == $output && $userEntry == $entry) {
                return "✅ Passed";
            }
        }

        return "❌ Failed";
    }

}
