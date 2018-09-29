<?php
header("Content-type: text/html; charset=utf-8");

include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "files.php";
include ENGINE_DIR . "products.php";

$products = getProducts();
closeConnection();
$products = getPathMinImage($products);

include TEMPLATES_DIR . "products.php";
?>