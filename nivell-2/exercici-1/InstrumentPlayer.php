<?php

class InstrumentPlayer
{
    private Instrument $instrument;

    public function __construct(Instrument $instrument = new UnknownInstrument())
    {
        $this->instrument = $instrument;
    }

    public function play(): void {
        $this->instrument->play();
    }
}

