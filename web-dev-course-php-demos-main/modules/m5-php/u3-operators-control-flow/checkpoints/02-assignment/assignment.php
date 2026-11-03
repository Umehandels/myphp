<?php
// Assignment Operators

echo '<h5>Assignment By Value</h5>'; 
$a = 20; 
printf('<p>a starts with the value %d</p>', $a); 
$b = $a; 
$b = 30; 
printf('<p>After changing b, a contains %d</p>', $a);

//-----------------------------------------------------------------

echo "\n<h5>Assignment By Reference</h5>"; 
$a = 20; 
printf("\n<p>a starts with the value %d</p> \n", $a); 
$b = &$a; 
$b = 30; 
printf("'<p>After changing b, a contains %d</p>'\n", $a); 

//-----------------------------------------------------------------


// Comparison Operators

$c = 2;
$f = 2;

echo $c === $f;
echo $c == $f;