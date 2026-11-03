<?php
// Logical Operators

$beanWeight = 50; 
$waterWeight = 200; 
if ($beanWeight > 30 && $waterWeight > 150) { 
echo '<p>Coffee machine working...</p>'; 
} else { 
echo '<p>Error: check coffee beans and water amount.</p>'; 
} 


$grindWeight = 30; 
if ($beanWeight > 30 || $grindWeight > 20) { 
echo '<p>Coffee machine working...</p>'; 
} else { 
echo '<p>Error: check coffee beans/grind and water amount.</p>'; 
} 


if (($beanWeight > 30 || $grindWeight > 20) && $waterWeight > 150) { 
echo '<p>Coffee machine working...</p>'; 
} else { 
echo '<p>Error: check coffee beans/grind and water amount.</p>'; 
} 