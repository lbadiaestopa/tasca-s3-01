<?php

include('src/Ghost.php');

function doCombat(Character $character)
{
    $character->move();
    $character->attack(); 
}

$enemy = new Ghost();
doCombat($enemy); 