<?php
// JSON string to decode
$jsonString = '{"name": "Charmi", "age": 20, "city": "Ahmedabad"}';

// Decode JSON string into associative array
$array = json_decode($jsonString, true);

// Check if decoding was successful
if ($array === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {
    // Print the decoded array
    echo "Decoded Array:\n";
    print_r($array);
}
