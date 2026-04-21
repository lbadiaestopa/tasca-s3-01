<?php

require_once 'MachineActions.php';
require_once 'ElectricHeaterActions.php';

class ElectricHeater implements MachineActions, ElectricHeaterActions
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }
}
