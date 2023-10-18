<?php

namespace App\Challenges;

class EntryOutput
{
    private array $entries;
    private array $outputs;

    public function addEntries(mixed ...$entries)
    {
        $this->entries = $entries;
    }

    public function addOutputs(mixed ...$outputs)
    {
        $this->outputs = $outputs;
    }

    public function getEntriesOutputs(): array
    {
        $entriesOutputs = [];

        for ($i = 0; $i < count($this->entries); $i++) { 
            $entriesOutputs[$this->entries[$i]] = $this->outputs[$i];
        }

        return $entriesOutputs;

    }

}
