<?php
include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "base.php";
include ENGINE_DIR . "cart.php";
include ENGINE_DIR . "render.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $count = $_POST['count'];
    $idProduct = $_POST['id_product'];
    $action = $_POST['action'];
    session_start();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $key = array_search($idProduct, array_column($_SESSION['cart'], 'id'));

    switch ($action) {
        case 'add': 
            if ($key === FALSE) {
                $_SESSION['cart'][] =  ['id' => $idProduct, 'count' => $count];
            } else {
                $_SESSION['cart'][$key]['count'] = $_SESSION['cart'][$key]['count'] + $count;
            }
            break;
        case 'change':
            $_SESSION['cart'][$key]['count'] = $count;
            break;
        case 'delete':
            array_splice($_SESSION['cart'], $key, 1);
            break;
    }

    redirect($_SERVER['HTTP_REFERER']);
}

session_start();
$cart = $_SESSION['cart'];
$cart = getFullCart($cart);
$cost = array_sum(array_column($cart, 'cost'));
closeConnection();

render('cart', [
    'cart' => $cart,
    'cost' => $cost
]);
?>