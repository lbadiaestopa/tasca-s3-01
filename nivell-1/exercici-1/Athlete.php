<?php

class Athlete
{

    private string $name;
    private string $country;

    public function __construct(string $name, string $country)
    {
        $this->name = $name;
        $this->country = $country;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function __toString()
    {
        return "$this->name from $this->country";
    }
}
