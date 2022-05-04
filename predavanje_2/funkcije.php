<?php
// Defining a function
function getSum($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "Sum of numbers $num1 and $num2 is : $sum";
}

// Calling a function
getSum(10, 20);

// Defining the function
function whatIsToday()
{
    echo "Today is " . date('l');
}

// Calling function
whatIsToday();
