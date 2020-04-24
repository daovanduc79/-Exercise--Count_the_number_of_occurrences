<?php

include_once 'action.php';

$numbers = [];
$value = 22;

for ($i = 0; $i < 100; $i++) {
    $numbers[$i] = rand(1, 100);
}

foreach ($numbers as $number) {
    echo $number . ' ';
}

$countNumber = countNumber($numbers, $value);
echo '<br>' . 'The number of occurrences of value = 22 is' . '<br>' . $countNumber;