<?php

require_once 'src/ElectricHeater.php';
require_once 'src/WashingMachine.php';
require_once 'src/WashingMachineActions.php';
require_once 'src/ElectricHeaterActions.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();

echo "\n";

$washer->turnOn();
$washer->wash();
$washer->turnOff();


?>