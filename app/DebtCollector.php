<?php

namespace App;

/*
 1. All methods declared here must be public, and they must be implemented in the classes who implement the Interface class
 2. This interface can extend multiple other interfaces, however the classes extending DebtCollector must implement all
the methods from the extended interfaces
 3. We can't have properties with interfaces, only METHODS and CONSTANTS
 4. CONSTANTS can be overwritten in the interfaces,after php 8.1 version
 5. When do I need an Interface ?
    - Does my class has multiple implementations ?
    - If we have to check what type of class using instance off func
    - When we want to provide a contract or template without implementation details
 */
interface DebtCollector extends AnotherInterface, SomeOtherInterface
{
    //public const SOME_CONST = 1;
    //public function __construct();

    public function collect(float $owedAmount) : float;
}