<?php

require_once 'IMachineActions.php';
require_once 'WashingMachineActions.php';

class WashingMachine implements IMachineActions, WashingMachineActions
{
    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }
}