<?php
function workingWithNumber(int $number1, int $number2) {
    echo "Числа, полученные функцией: {$number1} и {$number2}. ";

    if ($number1 >= 0 && $number2 >= 0){
        echo "Разность чисел: " . ($number1 - $number2) . "<br>";
    } else if ($number1 < 0 && $number2 < 0) {
        echo "Произведение чисел: " . ($number1 * $number2) . "<br>";
    } else {
        echo "Сумма чисел: " . ($number1 + $number2) . "<br>";
    }
}

for ($i = 0; $i < 4; $i++) {
    $num1 = rand(-100, 100);
    $num2 = rand(-100, 100);
    workingWithNumber($num1, $num2);
}

?>