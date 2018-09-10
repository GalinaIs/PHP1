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

function division(float $number1, float $number2):float {
    if ($number2 == 0) {
        return null;
    }
    return $number1 / $number2;
}

function mathOperation(float $number1, float $number2, $operation) {
    switch ($operation) {
        case "+":
            return addition($number1, $number2);
        case "-":
            return difference($number1, $number2);
        case "*":
            return multiplication($number1, $number2);
        case "/":
            return division($number1, $number2);
        default:
            return "Передана неверная операция. Должно быть передано '+', '-', '*' или '/'";
    }
}

$num1 = rand(-100, 100);
$num2 = rand(-100, 100);
echo "Первое число: {$num1}, второе число: {$num2}. <br>";

$operation = '+';
echo "Результат операции {$operation} : " . mathOperation($num1, $num2, $operation) . ".<br>";

$operation = '-';
echo "Результат операции {$operation} : " . mathOperation($num1, $num2, $operation) . ".<br>";

$operation = '*';
echo "Результат операции {$operation} : " . mathOperation($num1, $num2, $operation) . ".<br>";

$operation = '/';
echo "Результат операции {$operation} : " . mathOperation($num1, $num2, $operation) . ".<br>";

$operation = '%';
echo "Результат операции {$operation} : " . mathOperation($num1, $num2, $operation) . ".<br>";

?>