<?php
function addition(float $number1, float $number2):float {
    return $number1 + $number2;
}

function difference(float $number1, float $number2):float {
    return $number1 - $number2;
}

function multiplication(float $number1, float $number2):float {
    return $number1 * $number2;
}

function division(float $number1, float $number2) {
    if ($number2 == 0) {
        return null;
    }
    return $number1 / $number2;
}

function mathOperation($number1, $number2, $operation) {
    if (is_null($operation)) {
        return false;
    }
    
    $number1 = (float)$number1;
    $number2 = (float)$number2;
    $operation = (string)$operation;

    switch ($operation) {
        case "+":
            return addition($number1, $number2);
        case "-":
            return difference($number1, $number2);
        case "*":
            return multiplication($number1, $number2);
        case "/":
            return division($number1, $number2);
    }
}
?>