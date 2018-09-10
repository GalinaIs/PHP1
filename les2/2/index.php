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

$num1 = rand(-100, 100);
$num2 = rand(-100, 100);

echo "Первое число: {$num1}, второе число: {$num2}. <br>";
echo "Сумма чисел: " . addition($num1, $num2) . ".<br>";
echo "Разность чисел: " . difference($num1, $num2) . ".<br>";
echo "Произведение чисел: " . multiplication($num1, $num2) . ".<br>";
echo "Частное от деления чисел: " . division($num1, $num2) . ".<br>";

?>