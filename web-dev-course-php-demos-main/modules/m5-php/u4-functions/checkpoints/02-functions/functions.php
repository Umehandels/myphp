<?php
// Functions

function add ($num1, $num2){
  return $num1 + $num2;
}

echo add(1,2);

// ------------------ Copying by reference

function additionByRef(&$num){
  return $num +=10;
};
$b =5;
echo $b;
additionByRef($b);
echo $b;  


// -----------------
//  A function can receive a variable number of parameters. There are two ways to do this; the first is to use the built-in function func_get_args().

function sum() { 
$total = 0; 
foreach (func_get_args() as $num) { 
$total += $num; } 
return $total; } 
printf('<p>Adding numbers together: %d</p>', sum(10, 87, 42, 56)); 


// Second
function sumVariadic(...$nums) 
{ 
$total = 0; 
foreach ($nums as $num) { 
$total += $num; 
    } 
return $total; 
} 
printf('<p>Adding numbers together: %d</p>', sumVariadic(10, 87, 42, 56)); 
echo "\n";

// Lambda Function AKA Closure function.

$greeting = function ($name) { 
return "Hello, $name"; 
}; 

printf('<p>%s</p>', $greeting('Bob'));



// Anonymous functions can also be created using fat-arrow syntax also known as ARROW functions.

$otherGreeting = fn($name) => "Hello again, $name"; 
printf('<p>%s</p>', $otherGreeting('Bob')); 


// Closure Syntax


$cartTotals = [34.789, 212.009, 1612.881, 12.89]; 
$processedCart = array_map( 
    function ($price) { 
    $delivery = ''; 
    if ($price > 40) { 
      $delivery = 'Free delivery!'; 
            } 
      return '€' . number_format($price, 2, '.', ',') . " $delivery"; 
        }, 
    $cartTotals
); 
print_r($processedCart);