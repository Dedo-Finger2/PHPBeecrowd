<?php

namespace App\Challenges;

class EntryOutput
{
    private array $entries;
    private array $outputs;


    /**
     * addEntries
     * 
     * Este método adiciona uma nova entrada no array de entradas, recebendo um número
     * ilimitado de parâmetros, transformando eles em um array
     *
     * @param mixed ...$entries Entradas que o usuário vai inserir
     * @return void
     */
    public function addEntries(mixed ...$entries)
    {
        $this->entries = $entries;
    }


    /**
     * addOutputs
     * 
     * Este método adiciona uma nova saída no array de saídas, recebendo um número
     * ilimitado de parâmetros, transformando eles em um array
     *
     * @param mixed ...$outputs saídas que o usuário vai inserir
     * @return void
     */
    public function addOutputs(mixed ...$outputs)
    {
        $this->outputs = $outputs;
    }


    /**
     * getEntriesOutputs
     * 
     * Este método retorna todas as entradas e saídas em um novo array associativo
     * onde a chave é a entrada e o valor é a saída
     *
     * @return array Array associativo com as entradas e saídas
     */
    public function getEntriesOutputs(): array
    {
        $entriesOutputs = [];

        for ($i = 0; $i < count($this->entries); $i++) { 
            $entriesOutputs[$this->entries[$i]] = $this->outputs[$i];
        }

        return $entriesOutputs;
    }

}
