<?php

declare(strict_types=1);
use App\Transaction;
use App\Enums\Status;
use App\Toaster;

require __DIR__ . '/vendor/autoload.php';
// Class and Object
// chaining methods will not make sense if we need to return something, like a value not just a current instance

//$transaction1 = (new Transaction(100, 'Transaction 1'))
//    ->addTax(8)
//    ->addDiscount(10);
//
//$transaction2 = (new Transaction(200, 'Transaction 2'))
//    ->addTax(5)
//    ->addDiscount(7);

//var_dump($transaction1->getAmount(), $transaction2->getAmount()). PHP_EOL;

// NULL SAFE
//$transaction3 = new Transaction(5,'Test');
//echo $transaction3->customer->paymentProfile->id. PHP_EOL; //PHP Warning:  Attempt to read property "id" on null

//echo $transaction3->customer?->paymentProfile->id. PHP_EOL; // making customer nullsafe,no more error
// i have made them private and added getters

//,using coalescent and nullsafe together

// nullsafe works by short-circuiting the prpperty or method access, if we have null in getCustomer for example,
// everything pass that will be discarded and error will be thrown.
//The nullsafe allows us to continue so we can eventually get tpo the value of id in this case.
// echo $transaction3->getCustomer()?->getPaymentProfile()?->id ?? 'foo'. PHP_EOL;

//$str = '{"a" :1, "b" :2, "c" :3, "d" :4}';
//$arr = json_decode($str); // if you don't pass the 'true' to generate associative array it will
// generate object as an instance of  generic => std class and the keys will become the properties of the class and the
// values will be those properties value.

//var_dump($arr->b). PHP_EOL; // you can access specific properties
/*
/var/www/code/php-oop/index.php:24:
object(stdClass)[3]
  public 'a' => int 1
  public 'b' => int 2
  public 'c' => int 3
  public 'd' => int 4
*/

// casting array to object

$arr = [1,2,3];
$obj = (object) $arr;
// you can cast any scalar to object, integer, bool etc
//var_dump($obj->{2}); // you can access the properties like on normal class
/*
 object(stdClass)[3]
  public '0' => int 1
  public '1' => int 2
  public '2' => int 3
 */
//$transaction5 = new Transaction();

// class constants can be accessed on class and class instance level
//echo Transaction::STATUS_PAID;
//echo $transaction5::class;

//$transaction5->setStatus(Status::PAID);

//var_dump($transaction5);

//$transaction6 = new Transaction(25, 'Transaction 1');
//var_dump($transaction6::$amount); // can not access non static properties, with scope resolution cause they are not static,
// same applies to methods
//var_dump(Transaction::getCount());
$transaction7 = new Transaction(25);
// a way to access and change value on  private property with reflection api
/*
$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');

$reflectionProperty->setAccessible(true):

$reflectionProperty->setValue($transaction7, 125); // setting a value on the private property

var_dump($reflectionProperty->getValue($transaction7));
*/

//$transaction7->process();


$toaster = new Toaster();
$toasterPro = new \App\ToasterPro();

$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');

$toaster->addSlice(slice: 'bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

//$toaster->Toast();
$toasterPro->toastBagels();
