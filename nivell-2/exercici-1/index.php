<?php

require_once __DIR__ . '/Instrument.php';
require_once __DIR__ . '/InstrumentPlayer.php';
require_once __DIR__ . '/UnknownInstrumentPlayer.php';
require_once __DIR__ . '/GuitarPlayer.php';
require_once __DIR__ . '/DrumsPlayer.php';
require_once __DIR__ . '/PianoPlayer.php';

$player = new InstrumentPlayer();
$player->play();

$player = new InstrumentPlayer(new GuitarPlayer());
$player->play();

$player = new InstrumentPlayer(new DrumsPlayer());
$player->play();

$player = new InstrumentPlayer(new PianoPlayer());
$player->play();
