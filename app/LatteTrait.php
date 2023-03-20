<?php

namespace App;
/*
 Traits can not be instantiated, they have to be used within Classes or other Traits
- Methods in the Traits can be overwritten by the class which uses the Trait, if the same method is in the class from before.
- Trait methods used by a class will take precedence over the Parent class methods, example:
if MakeCoffee() is redefined in LatteTrait, and it is used in LatteMaker class it will overwrite the inheritance from
CoffeeMaker PARENT CLASS.
- PRECEDENCE :
1.Class method that is defined in the class
2.Trait method that the class uses via the Trait class
3.Base method that is in Parent class.
 */
trait LatteTrait
{
    public static string $foo;

   // public static int $x = 2;
    /* When a trait has a static property each class that uses this trait will have an
 independent instant of the property unlike in Inheritance where the Static property is shared */
    private string $milkType = 'whole-milk'; /*
 this can not be re-defined in the underlying classes, you can use it,
    but it has to match the method in full
 */
    public function makeLatte()
    {

        return static::class . ' is making latte with ' .  $this->milkType . PHP_EOL;
    }

    /* this is the right way to do it as shown below, instead of using abstract methods in Traits and so on
    */
    public function setMilkType(string $milkType): static
    {
          $this->milkType = $milkType;
          return $this;
    }
}