<?php

namespace App;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use LatteTrait;
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
    /*
    use CappuccinoTrait{
        CappuccinoTrait::makeLatte insteadof LatteTrait;
        // In case of same name method conflict we can tell which method to use
    }
    use LatteTrait{
        LatteTrait::makeLatte as makeOriginalLatte;
    }
    */



}