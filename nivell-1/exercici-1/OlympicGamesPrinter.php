<?php

require_once __DIR__ . '/OlympicGames.php';

class OlympicGamesPrinter
{
    private array $olympicGames = [];

    public function __construct(OlympicGames $olympicGames)
    {
        $this->olympicGames[] = $olympicGames;
    }

    public function addOlympicGames(OlympicGames $olympicGames): void
    {
        $this->olympicGames[] = $olympicGames;
    }

    public function printOlympicsData(int $year)
    {
        foreach ($this->olympicGames as $og) {
            if ($og->getYear() === $year) {
                echo "Olympic Games $year Results:\n";
            }
            foreach ($og->getEventsData() as $event) {
                echo "Event: " . $event->getName() . " on " . $event->getDate() . "\n";
                foreach ($og->getResultsData() as $result) {
                    if ($result->getEvent() === $event->getName()) {
                        foreach ($og->getAthletesData() as $athlete) {
                            if ($result->getAthlete() === $athlete->getName()) {
                                echo "- " . $result->getAthlete() . " from " . $athlete->getCountry() . " won " . $result->getMedal() . "\n";
                            }
                        }
                    }
                }
            }
                
        }
    }
}
