<?php
$cities = ['London', 'Paris', 'New York', 'Valletta', 'Bangkok'];
print_r($cities);


$fruits = ['apple', 1, true,'banana',2.3];

// Associative Arrays

echo '<br><br>';  

$ninjaCoders = [ 'CEO'=>'Alice Anderson', 'CTO'=>'Bob Barker', 'SVP Sales'=>'Craig Coleman', 20 => 'Desiree Diamont', 'Eliott Earhart']; 
print_r($ninjaCoders); 

// Creating Array
$sports[] = "Football"; 
$sports['USA'] = "Soccer"; 
$sports[2] = "Basketball"; 
print_r($sports); 


$thirties = range(30, 39); 
$fiveLetters = range('A', 'E'); 
var_dump($thirties); 
var_dump($fiveLetters); 

// Array Size
printf('<p>The size of the $thirties array is %d</p>', count($thirties)); 

printf('<p>The size of the $thirties array is %d</p>', count($thirties)); 
$sports = array_pad($sports, 15, 'Some other sport'); 
var_dump($sports);