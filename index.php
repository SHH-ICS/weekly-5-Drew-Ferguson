<?php
if (isset($_POST['iterations'])) {
    $iterations = intval($_POST['iterations']);

    if ($iterations <= 0) {
        echo "Iterations must be a positive integer";
        exit;
    }

    $pi = 0;
    $sign = 1;
    $denominator = 1;

    for ($i = 0; $i < $iterations; $i++) {
        $pi += $sign * 4 / $denominator;
        $sign *= -1;
        $denominator += 2;
    }

    echo round($pi, 4);
}
?>

<form method="post">
    <label for="iterations">Iterations:</label>
    <input type="number" id="iterations" name="iterations" required>
    <button type="submit">Calculate PI</button>
</form>