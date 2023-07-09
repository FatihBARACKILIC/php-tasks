<?php

$number = $_GET["number"];
if ($number === NULL || $number === "") {
    echo "<h1>Null Value!</h1>Please do not submit null values!";
    exit;
}
$result = checkNumber($number);
if ($result === 0) {
    echo "$number is divisible by 3 without a remainder";
} else {
    echo "The number you entered cannot be divided by 3. The first number that can be divided is $result.";
}


function checkNumber($number): int
{
    $remainderNumber = $number % 3;
    if ($remainderNumber == 0) return 0;
    return $number + (3 - $remainderNumber);
}
