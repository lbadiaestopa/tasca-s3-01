<?php

require_once 'IMachineActions.php';
require_once 'ElectricHeaterActions.php';

class ElectricHeater implements IMachineActions, ElectricHeaterActions
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
