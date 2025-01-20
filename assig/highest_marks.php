<?php

$marks = [
    "Math" => 85,
    "Science" => 92,
    "English" => 78,
    "History" => 88,
    "Geography" => 80
];


$highestSubject = "";
$highestMarks = -1;
foreach ($marks as $subject => $score){
 if($score > $highestMarks){

  $highestMarks=$score;
  $highestSubject=$subject;
}
}

echo "The subject with the highest marks is: $highestSubject with $highestMarks marks.";
?>
