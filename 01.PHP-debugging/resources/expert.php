<?php


declare(strict_types=1);

//phpinfo();
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);




echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
new_exercise(1);


//DEBUG SOL EX1: used the ini settings to get out of the screen of muerto, and had to callback the function, and variable was undefined so we defined that thang again!

// =============================================================================================================================
new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

//DEBUG SOL EX 2: $week was using the wrong index number was referring to tuesday

// =============================================================================================================================


new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

//$str = “Debugged ! Also very fun”;
$string= "Debugged! Also very fun";

echo substr($string, 0, 10);

//DEBUG SOL EX 3: substring has a function to show and hide words, so the first number (offset 0) says when to start counting to then use length number (length 10) to say which characters should we left out

// =============================================================================================================================


new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, -3);
}

print_r($week);

//DEBUG SOL EX4 : using the & character makes you re-use the variable again so that the substring will foreach variable do the substring function

// =============================================================================================================================

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alphabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
    if ($letter == 'z' ){
        break ;
    }
//    break ;
}


print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

//DEBUG SOL EX5: Using a break keyword, to stop a loop! In practice, create an if condition to then declare if this happens, then break the damn loop!

// =============================================================================================================================