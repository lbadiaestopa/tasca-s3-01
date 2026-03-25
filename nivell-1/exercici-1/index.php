<?php

require_once __DIR__ . '/OlympicGamesPrinter.php';
require_once __DIR__ . '/OlympicGames.php';
require_once __DIR__ . '/Athlete.php';
require_once __DIR__ . '/Event.php';
require_once __DIR__ . '/Result.php';

$athletesData = [
    ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
    ['name' => 'Michael Phelps', 'country' => 'USA']
];

$eventsData = [
    ['event' => '100m Sprint', 'date' => '2024-08-01'],
    ['event' => 'Swimming', 'date' => '2024-08-02']
];

$resultsData = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

$olympics = new OlympicGames(2012, $athletesData, $eventsData, $resultsData);
$olympicGamesPrinter = new OlympicGamesPrinter($olympics);
$printOlympicGames = $olympicGamesPrinter->printOlympicsData();
