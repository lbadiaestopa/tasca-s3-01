<?php

require_once __DIR__ . '/OlympicGamesPrinter.php';
require_once __DIR__ . '/OlympicGames.php';
require_once __DIR__ . '/Athlete.php';
require_once __DIR__ . '/Event.php';
require_once __DIR__ . '/Result.php';

$athletesData = [
    'Usain Bolt' => new Athlete('Usain Bolt', 'Jamaica'),
    'Michael Phelps' => new Athlete('Michael Phelps', 'USA')
];

$eventsData = [
    '100m Sprint' => new Event('100m Sprint', '2024-08-01'),
    'Swimming' => new Event('Swimming', '2024-08-02')
];

$results = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

$resultsData = [];

foreach ($results as $result) {
    $resultsData[] = new Result(
        $athletesData[$result['athlete']],
        $eventsData[$result['event']],
        $result['medal']
    );
}

$olympics = new OlympicGames(2012, $athletesData, $eventsData, $resultsData);
$olympicGamesPrinter = new OlympicGamesPrinter($olympics);
$printOlympicGames = $olympicGamesPrinter->printOlympicsData();
