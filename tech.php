<?php

$_office_hours = array(
    "Monday" => "2:45 PM to 3:45 PM",
    "Tuesday" => "2:15 PM to 4:15 PM",
    "Wednesday" => "2:45 PM to 3:45 PM",
    "Thursday" => "2:15 PM to 4:15 PM",
    "Friday" => "By appointment"
);

foreach ($_office_hours as $day => $hours) {
    echo "$day: $hours\n";
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_string = $_POST["input_string"];
    
    if (isset($_POST["string_length"])) {
        echo "String Length: " . strlen($input_string);
    } elseif (isset($_POST["string_reverse"])) {
        echo "String Reverse: " . strrev($input_string);
    } elseif (isset($_POST["uppercase"])) {
        echo "Uppercase: " . strtoupper($input_string);
    } elseif (isset($_POST["lowercase"])) {
        echo "Lowercase: " . strtolower($input_string);
    } elseif (isset($_POST["string_replace"])) {
        
        echo "String Replace: " . str_replace('a', 'X', $input_string);
    }
}




function countWords($str) {
    
    $str = strtolower($str);
    
     $str = preg_replace('/[^\w\s]/', '', $str);
    
    $words = explode(" ", $str);
    
     $wordCounts = array();
    
    foreach ($words as $word) {
       $word = trim($word);
        if (!empty($word)) {
            
            if (array_key_exists($word, $wordCounts)) {
                $wordCounts[$word]++;
            } else {
                $wordCounts[$word] = 1;
            }
        }
    }
    
    
    return $wordCounts;



}




?>
