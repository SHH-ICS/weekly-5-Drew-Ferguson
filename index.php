<?php
if ($argc !== 2 || intval($argv[1]) <= 0) {
    echo "Error: \"Invalid input. Please enter a positive integer.\"\n";
    exit(1);
}

$iterations = intval($argv[1]);
$pi = 0;
$sign = 1;

for ($i = 0; $i < $iterations; $i++) {
    $pi += $sign * 4 / (2 * $i + 1);
    $sign *= -1;
}
