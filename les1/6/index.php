<?php
    $myName = Galina;
    $myAge = 29;
    $dateNow = date("d-m-y G:i");

    $h5Value = "Меня зовут $myName.<br>Через год мне будет " . ($myAge + 1) . " лет, а еще через год " . ($myAge + 2) .
    " лет.<br>На моих часах сейчас: $dateNow.";

    echo "<h5>$h5Value</h5>";

    $h5NewValue = str_replace(" ", "_", $h5Value);
    echo "<h5>$h5NewValue</h5>";

    $dateInMyWatch = strstr($h5Value, "На ");
    echo "<h5>$dateInMyWatch</h5>";  
    
    echo "<a href='redirect.php'>Перейти на вторую страницу</a>"; 
?>