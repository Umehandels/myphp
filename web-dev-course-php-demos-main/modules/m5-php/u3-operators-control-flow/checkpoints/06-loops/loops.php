<?php
// Iteration


// For-Each Loop

$students = ['Alice', 'Bob', 'Craig', 'Daniela', 'Elisa']; 
foreach ($students as $id => $name) { 
echo "<p>Student $id: $name</p>"; 
}

//------------------------------------------------------

// The break Keyword
// The break keyword, when used in a loop, immediately terminates the loop. 
$bucketCapacity = 100; 
$bucketWeight = 0; 
$numHouses = 20; 
for ($currentHouse = 1; $currentHouse <= $numHouses; $currentHouse++) { 
echo "<p>House $currentHouse. Trick or Treat!</p>"; 
$bucketWeight += 15; 
if ($bucketWeight > $bucketCapacity - 15) { 
echo "<p>Bucket too full, returning home."; 
break; 
    } 
} 


//------------------------------------------------------

// The continue Keyword
// Whilst break terminates the entire loop, continue skips to the next iteration 

$bucketCapacity = 100; 
$bucketWeight = 0; 
$numHouses = 20; 
$spookyHouses = [2, 5, 9, 18]; 
for ($currentHouse = 1; $currentHouse <= $numHouses; $currentHouse++) { 
if (in_array($currentHouse, $spookyHouses)) { 
echo "<p>House $currentHouse is too spooky!</p>"; 
continue; 
    } 
echo "<p>House $currentHouse. Trick or Treat!</p>"; 
$bucketWeight += 15; 
if ($bucketWeight > $bucketCapacity - 15) { 
echo "<p>Bucket too full, returning home."; 
break; 
    } 
} 