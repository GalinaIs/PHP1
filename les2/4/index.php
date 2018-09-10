<?php
function power(float $val, int $pow):float {
    if ($pow == 0){
        return 1;
    }
    return $val * power($val, $pow - 1);
}

for ($i=0; $i<7; $i++){
    $num = rand(-10, 10);
    $pow = rand(0, 10);
    echo "Число ${num} в степени ${pow} равно " . power($num, $pow) . "<br>";
}
?>