<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $count = $_POST['qty'];
    $idProduct = $_POST['id'];
    $action = $_POST['action'];

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
    echo json_encode(['success' => 'ok', 'message' => 'Корзина успешно изменена!']);
 }
?>