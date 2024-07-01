<!-- How can you tell if a number is even or odd without using any Condition or loop? -->

<?php

$number = 7;

$remainder = $number % 2;

if($remainder == 0){
    echo "Number is Even";
}
else{
    echo "Number is Odd";
}