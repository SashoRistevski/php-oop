<?php

namespace App;
/*
 1. We can implement more than one interface using a comma
 2. We must declare all the methods that are in the interfaces
 3. If the methods are the same name but different method signatures and are implemented from different
    interfaces, there will be errors.

 */
class CollectionAgency implements DebtCollector
{

    public function collect(float $owedAmount): float
    {
        $guaranteed = $owedAmount * 0.5;

        return mt_rand($guaranteed, $owedAmount);
    }

   /* public function foo(): string
    {
        // TODO: Implement foo() method.
    }

    public function __construct()
    {
    }
   */
}