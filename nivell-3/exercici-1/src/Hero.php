<?php

require_once 'CanAttack.php';

class Hero extends Character implements CanAttack
{
    public function move(): void
    {
        echo "The hero charges forward, ready for battle.\n";
    }

    public function attack(): void
    {
        echo "The hero attacks with a sword.\n";
    }
}