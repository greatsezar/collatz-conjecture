echo '<?php
function collatz($num) {
    if ($num < 1) {
        return null;
    }

    $sequence = [];
    $maxValue = $num;
    $iterations = 0;

    while ($num != 1) {
        $sequence[] = $num;
        if ($num % 2 == 0) {
            $num /= 2;
        } else {
            $num = 3 * $num + 1;
        }
        $maxValue = max($maxValue, $num);
        $iterations++;
    }
    $sequence[] = 1;

    return [
        "sequence" => $sequence,
        "max_value" => $maxValue,
        "iterations" => $iterations
    ];
}

// Example usage
$result = collatz(5);
echo "Sequence: " . implode(" → ", $result["sequence"]) . "\n";
echo "Max value: " . $result["max_value"] . "\n";
echo "Iterations: " . $result["iterations"] . "\n";
' > 3x+1.php

git add 3x+1.php
git commit -m "Added example usage to the Collatz function"
