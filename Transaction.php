<?php
declare(strict_types=1);
class Transaction
{

// class has variables which are called properties
// functions are called methods
// access modifiers are visibility we add to the variables( properties ) and functions ( methods )

// Public are available to anyone interacting with the object, even outside the class
private float $amount;
private ?Customer $customer = null;
private string $description;

public function __construct(float $amount, string $description)
{
    $this->amount = $amount;
    $this->description = $description;
}

public function addTax(float $rate) : Transaction
{
     $this->amount += $this->amount * $rate / 100;
     return $this;
}

public function addDiscount(float $rate): Transaction
{
    $this->amount -= $this->amount * $rate / 100;
    return $this;
}

public function getAmount(): float
{
return $this->amount;
}

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

}
// Constructor property promotion
// we can type hint anything except callable
class Coffee {
    public function __construct(
       private string $type,
        private float $price = 5,
        private ?float $weight = null // need to type hint nullable to be null
    )
    {
        echo $this->price;
    }


}