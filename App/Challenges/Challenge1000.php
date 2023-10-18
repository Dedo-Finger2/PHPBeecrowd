<?php

namespace App\Challenges;

class Challenge1000 extends Challenge
{
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

    public function main()
    {
        echo "Hello World!\n";

        return "Hello World!";
    }

}
