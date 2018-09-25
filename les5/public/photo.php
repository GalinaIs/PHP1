<?php
include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "word.php";

$id = $_GET['id'];
$infoImage = getOneImageFromDB($id);
$str = declensionWord($infoImage['count_view'], 'раз', 'раза', 'раз');

include TEMPLATES_DIR . "photo.php";
?>