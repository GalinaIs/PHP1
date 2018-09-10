<?php
function currentTime(){
    $currentHour = date("G");
    $currentMinutes = date("i");
    $timeForPrint = "";

    if ($currentHour % 10 == 1 && $currentHour != 11) {
        $timeForPrint .= "{$currentHour} час";
    } else if (($currentHour % 10 == 2 && $currentHour != 12) || ($currentHour % 10 == 3 && $currentHour != 13) ||
        ($currentHour % 10 == 4 && $currentHour != 14)) {
        $timeForPrint .= "{$currentHour} часа";
    } else {
        $timeForPrint .= "$currentHour часов";
    }

    if ($currentMinutes % 10 == 1 && $currentMinutes != 11) {
        $timeForPrint .= " {$currentMinutes} минута";
    } else if (($currentMinutes % 10 == 2 && $currentMinutes != 12) || 
        ($currentMinutes % 10 == 3 && $currentMinutes != 13) || ($currentMinutes % 10 == 4 && $currentMinutes != 14)) {
        $timeForPrint .= " {$currentMinutes} минуты";
    } else {
        $timeForPrint .= " {$currentMinutes} минут";
    }

    return $timeForPrint;
}

echo currentTime();
?>