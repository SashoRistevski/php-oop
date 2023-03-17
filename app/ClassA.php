<?php

namespace App;

// LATE STATIC BINDING
// STATIC PROPERTIES AND METHODS

/*
- There are two types of bindings, the first EARLY Binding happens at COMPILE TIME and the second LATE Binding at RUNTIME
-
 */
class ClassA
{
protected static string $name = 'A';

public static function getName(): string
{
    return self::$name;
}
}