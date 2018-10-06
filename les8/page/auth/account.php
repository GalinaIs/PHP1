<?php
if (!$userId = $_SESSION['user_id']) {
    redirect('auth/login');
}

$user = getUserById($userId);
$orders = getOrdersByUserId($userId);

render('account', [
    'user' => $user,
    'orders' => $orders
]);
?>