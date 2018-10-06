<?php
$cart = $_SESSION['cart'];
$cart = getFullCart($cart);
$cost = array_sum(array_column($cart, 'cost'));
closeConnection();

render('cart', [
    'cart' => $cart,
    'cost' => $cost
]);
?>