<?php

namespace App;

class Terminator implements DebtCollector
{

    public function collect(float $owedAmount): float
    {
      return $owedAmount * 0.8;
       // return mt_rand($guaranteedAmount, $owedAmount);
    }
}