<?php
header("Content-type: text/html; charset=utf-8");

include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "base.php";
include ENGINE_DIR . "products.php";
include ENGINE_DIR . "render.php";

session_start();
if (!$userId = $_SESSION['user_id']) {
    redirect('login.php');
}

$products = getProducts();
$products = getOneImageProducts($products);
closeConnection();

render('products', ['products' => $products]);
?>