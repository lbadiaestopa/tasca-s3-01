<?php

include('src/Ghost.php');
include('src/Hero.php');
require_once 'src/CanAttack.php';

function doCombat(Character $character)
{
    $character->move();
    if ($character instanceof CanAttack) {
        $character->attack(); 
    }
}

$hero = new Hero;
$enemy = new Ghost();
doCombat($hero);
doCombat($enemy); 