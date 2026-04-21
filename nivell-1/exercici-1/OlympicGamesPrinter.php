<?php

require_once __DIR__ . '/OlympicGames.php';

class OlympicGamesPrinter
{
    private OlympicGames $olympicGames;

    public function __construct(OlympicGames $olympicGames)
    {
        $this->olympicGames = $olympicGames;
    }

    public function printOlympicsData(): void
    {
        echo $this->olympicGames . PHP_EOL;

        foreach ($this->olympicGames->getResultsData() as $result) {

            $athlete = $result->getAthlete();
            $event = $result->getEvent();

            echo $event . PHP_EOL;
            echo $athlete . ' won ' . $result->getMedal() . PHP_EOL;
            echo PHP_EOL;
        }
    }
}
