<?php

namespace App;
// COMPOSITION => "HAS A" RELATIONSHIP

 // FANCY OVEN "HAS A" TOASTER PRO FUNCTIONALITY
class FancyOven
{
    //private ToasterPro $toasterPro; // achieving composition using properties

    public function __construct(private ToasterPro $toaster) // using property promotion and dependency injection
    {
    }

    public function fry()
{
// frying
}
    public function toast()
    {
    $this->toaster->Toast();
    }

    public function toastBagel()
    {
    $this->toaster->toastBagels();
    }
}