<?php

namespace App;

class CoffeeMaker
{
    public function makeCoffee()
    {
        return static::class . ' is making coffee' . PHP_EOL;
    }

}