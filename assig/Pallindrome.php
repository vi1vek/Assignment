<?php
// Defines a function to check whether a given string is a palindrome. 
function isPalindrome($str) {
    
    $original = strtolower(str_replace(' ', '', $str));
   
    $reversed = strrev($original);

    return $original === $reversed;
}

$string = "Madam";

if (isPalindrome($string)) {
    echo "$string is a palindrome.";
} else {
    echo "$string is not a palindrome.";
}
?>
