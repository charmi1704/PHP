<?php
// Sample array
$array = ['apple', 'banana', 'cherry', 'strawberry'];

// Get a single random key
$randomKey = array_rand($array);
$randomValue = $array[$randomKey];

echo "Random Value: $randomValue <br>";