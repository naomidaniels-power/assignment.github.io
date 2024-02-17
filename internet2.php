<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    
    if (isset($_POST["length"])) {
        echo "Length of the string: " . strlen($inputString);
    } elseif (isset($_POST["reverse"])) {
        echo "Reversed string: " . strrev($inputString);
    } elseif (isset($_POST["uppercase"])) {
        echo "Uppercase string: " . strtoupper($inputString);
    } elseif (isset($_POST["lowercase"])) {
        echo "Lowercase string: " . strtolower($inputString);
    } elseif (isset($_POST["replace"])) {
        // For demonstration purposes, replace 'a' with 'x'
        echo "String after replacement: " . str_replace('a', 'x', $inputString);
    }
}
?>