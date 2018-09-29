<?php
header("Content-type: text/html; charset=utf-8");

include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "number.php";

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST['operation'];

$result = mathOperation($number1, $number2, $operation);

include TEMPLATES_DIR . "number.php";
?>