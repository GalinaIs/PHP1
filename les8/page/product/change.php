<?php
if (!$userId = $_SESSION['user_id']) {
    redirect('auth/login');
}

$error = false;
if ($userId != 1) {
    $error = true;
}
$products = getProducts();

render('changeProduct', [
    'error' => $error,
    'products' => $products
]);
?>