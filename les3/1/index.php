<?php
function myFinction (int $beginNumber, int $endNumber, int $divider) {
    $arrayNumber = [];

    while ($beginNumber <= $endNumber) {
        if ($beginNumber % $divider === 0) {
           $arrayNumber[] = $beginNumber; 
        }
        $beginNumber++;
    }

    return $arrayNumber;
}

echo implode(', ', myFinction(0, 100, 3)) . '<br>';
?>