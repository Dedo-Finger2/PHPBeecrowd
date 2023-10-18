<?php

namespace App\Challenges;

/**
 * Classe de desafios
 */
abstract class Challenge
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


    /**
     * getChallengeInfo
     * 
     * Este método retorna um texto formatado contendo informações do desafio sendo feito
     *
     * @return void
     */
    public function getChallengeInfo(): void
    {
        echo "<br><br><br>";        // Quebra de linha
        echo "<hr>";                // Linha divisora

        echo self::$CHALLENGENUMBER . " - " . $this->challengeTitle;        // Mostra o número do desafio e seu nome

        echo "<h2>Entry => Output</h2>";                                    // Mostra as entradas e saídas deste desafio
        foreach ($this->entriesOutputs->getEntriesOutputs() as $entry => $output) {
            echo "<li>". $entry . " => " . $output . "</li>";
        }

        echo "<hr>";                // Linha divisora

        self::$CHALLENGENUMBER++;   // Incrementa o número do desafio
    }


    /**
     * getUserOutput
     * 
     * Este método retorna o output do usuário
     *
     * @return mixed
     */
    public function getUserOutput(): mixed
    {
        return $this->userOutput;
    }


    /**
     * setUserOutput
     * 
     * Este método da valor ao output do usuário
     *
     * @param mixed $value Valor que será inserido no output do usuário
     * @return void
     */
    public function setUserOutput(mixed $value)
    {
        $this->userOutput = $value;
    }



    /**
     * checkUserOutput
     * 
     * Método responsável por validar o output obtido pelo usuário com uma determinada entrada
     * é comparado a entrada e output do usuário com a entrada correspondente e output correspondente
     * no objeto do tipo EntryOutout.
     *
     * @param mixed $userEntry Valor de entrada do usuário
     * @return string Indicação se o usuário concluiu o desafio ou não
     */
    public function checkUserOutput(mixed $userEntry, mixed $userOutput): string
    {
        foreach ($this->entriesOutputs->getEntriesOutputs() as $entry => $output) {
            if ($userOutput == $output && $userEntry == $entry) {
                return "✅ Passed";
            }
        }

        return "❌ Failed";
    }

}
