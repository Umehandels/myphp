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

printf('<p>The size of the $thirties array is %d</p>', count($thirties)); 
$sports = array_pad($sports, -15, 'Some other sport'); 
var_dump($sports);

// Multi-Dimensional Array -----------------------------------------------------
$gradeBook = [ 
'John Jefferson' => ['English', 'Geography', 'Physics'], 
'Georgia Graham' => ['English', 'French', 'Chemistry'], 
'Harriet Hasan' => ['Biology', 'Philosophy'] 
]; 
var_dump($gradeBook); 

printf('<p>Georgia\'s second subject is %s</p>', $gradeBook['Georgia Graham'][1]); 

$gradeBookDetail = [ 
'John Jefferson' => [ 
'English' => ['Midterm' => 90, 'Final' => 85], 
'Geography' => ['Midterm' => 62, 'Final' => 83], 
'Physics' => ['Midterm' => 73, 'Final' => 65] 
    ], 
'Georgia Graham' => [ 
'English' => ['Midterm' => 92, 'Final' => 98], 
'Geography' => ['Midterm' => 91, 'Final' => 100], 
'Physics' => ['Midterm' => 76, 'Final' => 78] 
    ], 
'Harriet Hasan' => [ 
'Biology' => ['Midterm' => 89, 'Final' => 81], 
'Philosophy' => ['Midterm' => 76, 'Final' => 82] 
    ] 
]; 
var_dump($gradeBookDetail); 
printf('Harriet scored %d in her Philosophy final.', $gradeBookDetail['Harriet Hasan']['Philosophy']['Final']); 

// ARRAY FUNCTIONS----------------------------------------------------------------

// list()
$planetArray = ['Mercury'=>'Rocky', 'Venus'=>'Rocky', 'Earth'=>'Rocky',  
'Mars'=>'Rocky', 'Jupiter'=>'Gas', 'Saturn'=>'Gas',  
'Uranus'=>'Ice', 'Neptune'=>'Gas']; 
list('Mercury' => $first, 'Venus' => $second) = $planetArray; 
echo "<p>$first and $second</p>";

//array_slice()
$rockyPlanets = array_slice($planetArray,0,4); 
print_r($rockyPlanets); 

//array_chunk()
echo '<br><br>'; 
$inThrees = array_chunk($planetArray, 3); 
var_dump($inThrees); 
echo '<br><br>'; 
$inThreesPreserved = array_chunk($planetArray, 3, true); 
var_dump($inThreesPreserved); 

//array_keys() and array_values()
$keys = array_keys($planetArray); 
var_dump($keys); 
$values = array_values($planetArray); 
var_dump($values); 

// array_key_exists()
$body = 'Pluto'; 
printf('<p>%s is %s a planet.</p>', $body,  array_key_exists($body, $planetArray) ? '' : 'not'); 

//array_splice()
array_splice($planetArray, 4, count($planetArray), array('HD 260655 b', 'HD 260655 c')); 
var_dump($planetArray); 

//extract()
extract($planetArray); 
echo "<p>Mars is a $Mars planet.</p>"; 

//compact()
$star1 = 'Sol'; 
$star2 = 'Proxima Centauri'; 
$star3 = 'Rigil Kentaurus'; 
$stars = compact('star1', 'star2', 'star3'); 
print_r($stars);

//Traversing Arrays----------------------------------------------------------------------------

// Resetting the array 
$planetArray = ['Mercury'=>'Rocky', 'Venus'=>'Rocky', 'Earth'=>'Rocky',  
'Mars'=>'Rocky', 'Jupiter'=>'Gas', 'Saturn'=>'Gas',  
'Uranus'=>'Ice', 'Neptune'=>'Gas'];  

// Traversing arrays 
foreach($planetArray as $name=>$type) { 
printf('<p>%s is a %s planet.</p>', $name, $type); 
} 

// using a foreach loop
foreach($planetArray as $name=>$type) { 
if ($name === 'Uranus') { 
$type = 'Ice Giant'; 
    } 
printf('<p>%s is a %s planet.</p>', $name, $type); 
} 
print_r($planetArray); 

// ampersand & symbol
foreach($planetArray as $name=>&$type) { 
if ($name === 'Uranus') { 
$type = 'Ice Giant'; 
    } 
printf('<p>%s is a %s planet.</p>', $name, $type); 
} 
print_r($planetArray); 

//normal for loop
$jupiterMoons = ['Europa', 'Io', 'Ganymede', 'Callisto']; 
for ($i=0; $i < count($jupiterMoons); $i++) { 
$jupiterMoons[$i] .= ' Moon'; 
printf('<p>%s</p>', $jupiterMoons[$i]); 
}    
print_r($jupiterMoons); 