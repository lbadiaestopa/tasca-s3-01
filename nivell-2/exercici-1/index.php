<?php

require_once __DIR__ . '/Instrument.php';
require_once __DIR__ . '/InstrumentPlayer.php';
require_once __DIR__ . '/UnknownInstrument.php';
require_once __DIR__ . '/Guitar.php';
require_once __DIR__ . '/Drums.php';
require_once __DIR__ . '/Piano.php';

$player = new InstrumentPlayer();
$player->play();

$player = new InstrumentPlayer(new Guitar());
$player->play();

$player = new InstrumentPlayer(new Drums());
$player->play();

$player = new InstrumentPlayer(new Piano());
$player->play();
