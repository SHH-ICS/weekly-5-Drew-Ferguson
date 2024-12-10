<?php
$iterations = intval($argv[1] ?? -1); // Assign default -1 if $argv[1] is missing
if ($argc !== 2 || $iterations < 0) {
    echo "Error: \"Invalid input. Please enter a non-negative integer.\"\n";
    exit(1);
}

$pi = 0;
$sign = 1;

for ($i = 0; $i < $iterations; $i++) {
    $pi += $sign * 4 / (2 * $i + 1);
    $sign *= -1;
}

echo $pi . "\n";
