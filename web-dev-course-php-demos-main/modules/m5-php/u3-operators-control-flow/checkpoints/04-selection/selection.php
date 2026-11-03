<?php
// Control Flow

echo '<h5>IF Statement</h5>'; 
$age = 23; 
if ($age >= 18) { 
echo '<p>You can drive a car.</p>'; 
} else { 
echo '<p>You cannot legally drive a car yet.</p>'; 
} 


echo '<h5>Multiple Outcomes</h5>'; 
$pizzaChoice = 2; 
if ($pizzaChoice === 1) { 
echo '<p>Pizza Margherita</p>'; 
} elseif ($pizzaChoice === 2) { 
echo '<p>Pizza Pepperoni</p>'; 
} elseif ($pizzaChoice === 3) { 
echo '<p>Pizza Mushroom</p>'; 
} else { 
echo '<p>You did not choose an available pizza!</p>'; 
} 


// the colon : can be used instead of braces  { } for a selection statement
if ($pizzaChoice === 1): 
echo '<p>Pizza Margherita</p>'; 
elseif ($pizzaChoice === 2): 
echo '<p>Pizza Pepperoni</p>'; 
elseif ($pizzaChoice === 3): 
echo '<p>Pizza Mushroom</p>'; 
else: 
echo '<p>You did not choose an available pizza!</p>'; 
endif;