<?php
if (!$userId = $_SESSION['user_id']) {
    redirect('auth/login');
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