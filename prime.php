<?php
function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
    }
    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }
    
    $i = 5;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

$num = readline("Enter a number: ");

if (is_prime($num)) {
    echo $num . " is a prime number." . PHP_EOL;
} else {
    echo $num . " is not a prime number." . PHP_EOL;
}
?>

