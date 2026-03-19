<?php

class Result
{

    private string $athlete;
    private string $event;
    private string $medal;

    public function __construct(string $athlete, string $event, string $medal)
    {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->medal = $medal;
    }

    public function getAthlete(): string
    {
        return $this->athlete;
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function getMedal(): string
    {
        return $this->medal;
    }
}
