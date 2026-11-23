<?php

abstract class Animal
{
    // Abstract method
    abstract public function makeSound();

    // Regular method
    public function eat()
    {
        echo "Animal is eating.\n";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Dog barks.\n";
    }
}

$dog = new Dog();
$dog->eat();
$dog->makeSound();

// Interface -----------------------------------------------------

interface PaymentMethod
{
    public function pay($amount);
}

class CreditCardPayment implements PaymentMethod
{
    public function pay($amount)
    {
        echo "Paid $$amount using Credit Card.\n";
    }
}

class PayPalPayment implements PaymentMethod
{
    public function pay($amount)
    {
        echo "Paid $$amount using PayPal.\n";
    }
}

$creditCard = new CreditCardPayment();
$creditCard->pay(100);

$paypal = new PayPalPayment();
$paypal->pay(50);



// Trait--------------------------------------------------------------------

trait Logger
{
    public function log($message)
    {
        echo "$message\n";
    }
}

class User
{
    use Logger;
}

class Product
{
    use Logger;
}

$user = new User();
$user->log("User created");

$product = new Product();
$product->log("Product added");

?>