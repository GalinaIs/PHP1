<?php
include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "base.php";
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "products.php";
include ENGINE_DIR . "render.php";

session_start();
if (!$userId = $_SESSION['user_id']) {
    redirect('login.php');
}

$id = $_GET['id'];
$oneProduct = getOneProduct($id);
$images = getAllImagesOneProduct($oneProduct['id']);
closeConnection();

render('oneProduct', [
    'oneProduct' => $oneProduct,
    'images' => $images
]);
?>