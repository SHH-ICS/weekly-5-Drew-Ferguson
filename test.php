<?php
$iterations = $argv[1] ?? null;

if ($argc !== 2 || !ctype_digit($iterations) || intval($iterations) < 0) {
    echo "Error: \"Invalid input. Please enter a non-negative integer.\"\n";
    exit(1);
}

$iterations = intval($iterations);
$pi = 0;
$sign = 1;

for ($i = 0; $i < $iterations; $i++) {
    $pi += $sign * 4 / (2 * $i + 1);
    $sign *= -1;
}

echo $pi . "\n";
