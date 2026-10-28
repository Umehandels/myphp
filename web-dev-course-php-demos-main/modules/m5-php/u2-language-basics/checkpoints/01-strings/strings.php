<?php

// DATA TYPES

// Integar
$number = 42;
echo $number."\n";

// Float
$numberFloat = 0.5;
echo $numberFloat."\n";

// String
$firstName = 'Maria'; $surname = 'Borg';
echo $surname ." ". $firstName."\n";

// Boolean
$isRaining = false;
echo $isRaining;
echo $isRaining ?'absolutly':'nah bro nah';

// Arrays
$temperatures = [23.5,15.2,50.3,10.2,5.5];
echo "\n".$temperatures[0].' '. $temperatures[1].'\n'; 

print_r($temperatures);
$company = ['CEO'=>'Alice Anderson', 'CTO'=>'Bob Barker'];
// echo '<p>Company:</p>';
print_r($company);

// Object
class Dog{    
    Public $name = '';
 public function bark() {
 echo 'Woof';
}};

$d = new Dog();