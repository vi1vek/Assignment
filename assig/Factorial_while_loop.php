<?php
// Define the number for which to calculate the factorial
$number = 7;
//Write a script to calculate the factorial of a number using a while loop.

// Initialize variables
$factorial = 1;
$i = $number;

// Calculate the factorial using a while loop
while ($i > 0) {
    $factorial *= $i; // Multiply the current value of factorial by $i
    $i--;             // Decrement $i
}

// Output the result
echo "The factorial of $number is $factorial.";
?>