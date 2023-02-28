<?php
namespace App;
class PaymentProfile
{
public int $id;

public function __construct()
{
    $this->id = rand(); // just to assign a random number to the id
}
}