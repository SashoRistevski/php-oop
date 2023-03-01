<?php

namespace App;
// Inheritance
class ToasterPro extends Toaster
{
    protected int $numberOfSlices;


    public function __construct(/*int $x */) // signature method is not important here, only with properties and methods
    {
        // need to call the parent __construct because in that construct the AddSlice method is using a property that
        // is not initialized oin the Toaster PRO
        parent::__construct();
        $this->numberOfSlices = 4;
    }

    public function AddSlice(string $slice): void
    {
        parent::addSlice($slice);
        // if we don't call the parent method, this on will override it
    }
    public function toastBagels()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . ' with bagle option! ' . PHP_EOL;
        }
    }
}