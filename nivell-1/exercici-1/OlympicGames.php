<?php

require_once __DIR__ . '/Athlete.php';
require_once __DIR__ . '/Event.php';
require_once __DIR__ . '/Result.php';

class OlympicGames
{
    private int $year;
    private array $athletesData = [];
    private array $eventsData = [];
    private array $resultsData = [];

    public function __construct(int $year, array $athletesData, array $eventsData, array $resultsData)
    {
        $this->year = $year;
        $this->athletesData = $this->addAthletes($athletesData);
        $this->eventsData = $this->addEvents($eventsData);
        $this->resultsData = $this->addResults($resultsData);
    }

    public function addAthletes(array $athletesData): array
    {
        foreach ($athletesData as $athleteData) {
            $athletes[] = new Athlete($athleteData['name'], $athleteData['country']);
        }
        return $athletes;
    }

    public function addEvents(array $eventsData): array
    {
        foreach ($eventsData as $eventData) {
            $events[] = new Event($eventData['event'], $eventData['date']);
        }
        return $events;
    }

    public function addResults(array $resultsData): array
    {
        foreach ($resultsData as $resultData) {
            $results[] = new Result($resultData['athlete'], $resultData['event'], $resultData['medal']);
        }
        return $results;
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
        return "Olympic Games $this->year \n";
    }
}
