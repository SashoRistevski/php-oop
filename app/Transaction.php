<?php

declare(strict_types=1);
namespace App;
use App\Enums\Status;
use http\Exception\InvalidArgumentException;
class Transaction
{
private static int $count = 0; // Static properties are accessed with scope resolution ' Transaction::count'
// class has variables which are called properties
// functions are called methods
// access modifiers are visibility we add to the variables( properties ) and functions ( methods )
// Public are available to anyone interacting with the object, even outside the class

private string $status;
private float $amount;
//private ?Customer $customer = null;
//private string $description;

public function __construct(float $amount, /*string $description */)
{
    self::$count++;
    //$this->setStatus(Status::PENDING);
   // var_dump(Status::PAID);
    $this->amount = $amount;
 //   $this->description = $description;
}
public static function getCount() : int
{
    // echo $this->amount;  can't use $this variable cause it refers to a calli object, in case of statics ( self )
    // we don't have objects cause they belong to the class
    return self::$count;
}
// the get method allows us to see the amount outside of the class and preserve the private state of amount
public function getAmount(): float
{
    return $this->amount;
}

public function process()
{
echo ' Processing $' . $this->amount . ' transaction ';

    $this->generateReceipt();

    $this->sendEmail();
}

public function setStatus(string $status) : self
{
    if (!isset(Status::ALL_STATUSES[$status])){
        throw new \InvalidArgumentException('Invalid status');
    }
    $this->status = $status;
    return $this;
}

//public function addTax(float $rate) : Transaction
//{
//     $this->amount += $this->amount * $rate / 100;
//     return $this;
//}
//
//public function addDiscount(float $rate): Transaction
//{
//    $this->amount -= $this->amount * $rate / 100;
//    return $this;
//}
//
//public function getAmount(): float
//{
//return $this->amount;
//}
//
//    /**
//     * @return Customer|null
//     */
//    public function getCustomer(): ?Customer
//    {
//        return $this->customer;
//    }
//
//}
//// Constructor property promotion
//// we can type hint anything except callable
//class Coffee {
//    public function __construct(
//       private string $type,
//        private float $price = 5,
//        private ?float $weight = null // need to type hint nullable to be null
//    )
//    {
//        echo $this->price;
//    }

}