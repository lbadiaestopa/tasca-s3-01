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
        echo $this->olympicGames;
        foreach ($this->olympicGames->getEventsData() as $event) {
            foreach ($this->olympicGames->getResultsData() as $result) {
                if ($event->getName() === $result->getEvent()) {
                    echo $event . PHP_EOL . $this->matchResultsWithAthletes($result->getAthlete()) . PHP_EOL;
                }
            }
        }
    }

    public function matchResultsWithAthletes(string $athlete): ?string
    {
        foreach ($this->olympicGames->getResultsData() as $result) {
            foreach ($this->olympicGames->getAthletesData() as $a)
                if ($athlete === $a->getName()) {
                    return $a . ' won ' . $result->getMedal();
                }
        }
    }
}
