<?php

//making functions. (Make sure a function always does 1 thing only for readability)
function newCalc(/* parameters go here */ $x) 
{ // curly braces go UNDER the function definition!
    $newNum = $x * 0.75;
    echo "Here is 75% of what you wrote: $newNum";
}

$x = 100;
// we can define $x anywhere before the function call
newCalc($x);

// we can replace the parameter in the function by overwriting it with another function
$a = 10;
newCalc($a);

// It is good practice to write all your functions in a seperate functions file and 
// refer to it in your code