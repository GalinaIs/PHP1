<?php
if (!$userId = $_SESSION['user_id']) {
    redirect('auth/login');
}

$products = getProducts();
$products = getOneImageProducts($products);
closeConnection();

render('products', ['products' => $products]);
?>