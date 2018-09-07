<?php
    $a = 10;
    $b = 250;
    echo "<p>a=$a b=$b</p>";

    $a += $b;
    $b = $a - $b;
    $a -= $b;
    echo "<p>a=$a b=$b</p>";
?>