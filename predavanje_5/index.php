<?php
echo "<pre>";

function missingValueInArray(array $array): array
{
    // $range = [];
    // for ($i = min($array); $i < max($array) + 1; $i++) {
    //     $range[] = $i;
    // }

    $range[] = range(min($array), max($array));

    return array_diff($range, $array);
}

$testArray = [2, 1, 4, 8, 9];

var_dump(missingValueInArray($testArray));

echo "</pre>";
echo "<br><br><br>";
echo "<pre>";

function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
}
foo("addasd", null, []); // Number of arguments: 3 

echo "</pre>";


echo "</pre>";
function devide($a, $b)
{
    if (!$b) {
        throw new Exception('Division by zero');
    }
    return $a / $b;
}

try {
    echo devide(5, 0);
} catch (Exception $e) {
    echo "Caught exception: ", $e->getMessage(), "<br>";
} finally {
    
}


echo "</pre>";
