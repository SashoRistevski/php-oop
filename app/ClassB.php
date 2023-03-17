<?php

namespace App;

class ClassB extends ClassA
{
protected static string $name = 'B';
/* Now we are overwriting the early static bind in parent class, and we introduce late static binding
- now in the index.php we get A and B echoed.
- However this is not a good solution because it defeats the purpose of inheritance, we want to have the base
functionality inherited to the child classes.
*/
public static function getName(): string
{
   // return self::$name;
    return static::$name;
    /* now we get A and B printed out, LATE STATIC BINDING USES RUNTIME INFO to determine how to call the method or
    how to access the property or method
    */
}
}