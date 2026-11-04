<?php
// Functions

// -------------------------
Function firstFunction(){
    echo "This is the first \n ";
};

firstFunction();

// --------------------------
Function byValues($num1, $num2){

    $num1 =+ $num2;
    return $num2 =+ $num1;
}
echo byValues(5, 6);
echo "\n";

// -------------------- By reference
function additionByRef(&$book){
  return $book *=24;   };
$book =12;
echo $book;
additionByRef($book);
echo $book;   
echo "\n";


// -------------------Multiple --------------------------------------------------------------------------------------------------------
function thisFunction() { 
    $total = 0; 
 foreach (func_get_args() as $num) { 
             $total += $num; } 

return $total; } ;

printf(thisFunction(5,3,7,9,32)); 
echo "\n";

// ------------------------ NESTED FUNCTION ----------------------------------------------------------------------------------------------

Function nestedFunction($num1, $num2){
  $num1 += $num2;
  function secondFunction ($num1){
    return $num1 * 100;
  }

  return secondFunction($num1);

}

echo nestedFunction(5, 20);

// ------------------ Callback Function --------------------------------------------------------------------------------------------------
echo "\n";

function greet($name) {
    echo "Hello, $name!";
}

function processUser($callback) {
    $callback("Jaachimma");
}

processUser("greet");


//----------------------------- Arrow Function ---------------------------------------------------------------------------------------------
echo "\n";
$multiply = fn($a, $b) => $a * $b;

echo $multiply(5, 10);



//----------------------------- Recursion Function ---------------------------------------------------------------------------------------------
echo "\n";
function countdown($number) {

    if ($number <= 0) {
        echo "Done!";
        return;
    }

    echo $number . "\n";

    countdown($number - 1);
}

countdown(5);

//----------------------------- Type Limits Function ------------------------------------------------------------------------------------------------------
echo "\n";

function addNumbers(int $num1, int $num2): int {

    return $num1 + $num2;

}

echo addNumbers(10, 20);