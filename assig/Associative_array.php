<?php
//Iterate through an associative array of country names and their capitals and display them. 
// Define an associative array with countries and their capitals
$countries = [
    "India" => "New Delhi",
    "United States" => "Washington, D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Germany" => "Berlin"
];

// Iterate through the associative array
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>
