<?php

namespace App;
// ABSTRACT CLASSES AND METHODS

/* use abstract classes when you want to force the child classes to implement the methods of the base class while
 providing some basic functionality in the base class.
*/
abstract class Field implements Renderer
{
public function __construct(protected string $name)
{
}



}