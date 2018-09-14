<?php
function infoAboutNumber (int $beginNumber, int $endNumber) {
    $arrayInfo = [];

    do {
        if ($beginNumber == 0) {
            $arrayInfo[] = '0 – это ноль.';
        } else if ($beginNumber % 2 == 0) {
            $arrayInfo[] = $beginNumber . ' – четное число.';
        } else {
            $arrayInfo[] = $beginNumber . ' – нечетное число.';
        }

        $beginNumber++;
    } while ($beginNumber <= $endNumber);

    return $arrayInfo;
}

echo implode('<br>', infoAboutNumber(0, 10));
?>