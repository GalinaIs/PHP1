<?php

function declensionWord($value, $end1, $end2, $end3) {
    if ($value > 20) {
        $value %= 10;
    }

    if ($value == 1) {
        $str = $end1;
    } else if ($value > 1 && $value <5) {
        $str = $end2;
    } else {
        $str = $end3;
    }

    return $str;
}
?>