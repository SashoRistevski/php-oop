<?php

namespace App;
// Inheritance

// USE " IS A RELATIONSHIP" TO DECIDE IF YOU CAN LEVERAGE AND USE INHERITANCE
// EXAMPLE : TOASTER PRO IS A TOASTER
class Toaster
{
    protected array $slices;
    protected int $numberOfSlices;

    public function __construct()
    {
        $this->slices = [];
        $this->numberOfSlices = 2;
    }

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->numberOfSlices) {
            $this->slices[] = $slice;
        }
    }

    public function Toast()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
}

