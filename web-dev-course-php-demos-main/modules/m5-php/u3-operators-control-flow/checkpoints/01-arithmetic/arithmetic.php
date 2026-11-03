<?php
// Arithmetic Operators

// $a = 21; $b = 4;
// echo $a + $b;

function addition($a, $b) {
  echo -$a + $b;
}

function multiplication($a, $b) {
  echo $a * $b;
}

// ------------

$a = [1, 2, 3];
$b = [4,5,6];

// Union by Key
$c = $a + $b;
print_r($c);

// Union by value
print_r( array_values(array_unique(array_merge($a, $b))));


// --------------------------
$v = 20;
$d = 25;


echo "<h1> arithmetic operations examples </h1> \n";

printf ("<p> %d + %d = %d </p> \n", $v, $d, $v+$d); 
printf ('<p> %d * %d = %d </p>', $v, $d, $v*$d); 
printf ('<p> %d / %d = %d </p>', $v, $d, $v/$d); 


// Identity Negation 
$price = 7.3;
$cartTotal = 3;

printf("\nCartTotal = %d \n", ++$cartTotal);
printf("CartTotal = %d \n", ++$cartTotal);


$cartTotal2 = 2;
printf("\nCartTotal = %d \n", $cartTotal2++);
// printf("CartTotal = %d \n", $cartTotal2++);
printf("CartTotal = %d \n", $cartTotal2);
