<?php

namespace App;

class DebtCollectionService
/* 1. If we try and use Rocky as another debt collector we can't cause we had hardcoded the Collection agency in the
 collect debt method and Rocky class can't use the method to call
   2.This introduces POLYMORPHISM( many forms)  , meaning an object can pass multiple instances of checks,
 can $collector pass multiple instances of checks ?
*/
{
public function collectDebt(DebtCollector $collector): void
// Figure out how much debt is owed, then call the collect method in the Debt Collector
{
    // var_dump($collector instanceof Rocky); // returns true cause $collector is instance of Rocky,
    // cause Rocky implements Debt Collector
$owedAmount = mt_rand(100, 1000);
$collectedAmount = $collector->collect($owedAmount);

echo 'Collected $' . $collectedAmount .  ' out of $' . $owedAmount. PHP_EOL;

}
}