<?php

require_once __DIR__ . '/Athlete.php';
require_once __DIR__ . '/Event.php';
require_once __DIR__ . '/Result.php';

class OlympicGames
{
    private int $year;
    private array $athletesData;
    private array $eventsData;
    private array $resultsData;

    public function __construct(int $year, array $athletesData, array $eventsData, array $resultsData)
    {
        $this->year = $year;
        $this->athletesData = $athletesData;
        $this->eventsData = $eventsData;
        $this->resultsData = $resultsData;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getAthletesData(): array
    {
        return $this->athletesData;
    }

    public function getEventsData(): array
    {
        return $this->eventsData;
    }

    public function getResultsData(): array
    {
        return $this->resultsData;
    }

    public function __toString(): string
    {
        return "Olympic Games $this->year\n";
    }
}
