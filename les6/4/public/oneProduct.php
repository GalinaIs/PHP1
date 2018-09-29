<?php
include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "files.php";
include ENGINE_DIR . "products.php";

$id = $_GET['id'];
$oneProduct = getOneProduct($id);
$pathFullImage = getPathFullImage($oneProduct);

include TEMPLATES_DIR . "oneProduct.php";
?>