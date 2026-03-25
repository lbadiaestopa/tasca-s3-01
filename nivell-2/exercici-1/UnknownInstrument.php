<?php

class UnknownInstrument implements Instrument
{
    public function play(): void
    {
        echo "🔇 Unknown instrument\n";
    }
}