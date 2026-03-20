<?php

class UnknownInstrumentPlayer implements Instrument
{
    public function play(): void
    {
        echo "🔇 Unknown instrument\n";
    }
}