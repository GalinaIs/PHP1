<?php
function makeOrder($userId) {
    $cart = $_SESSION['cart'];

    execute("insert into order_user (id_user, id_status) values ({$userId}, 1)");
    $orderId = queryOne("select * from order_user where id_user={$userId} ORDER BY id DESC")['id'];

    foreach ($cart as $oneProductCart) {
        execute("insert into order_full_info (id_product, product_count, id_order) values ({$oneProductCart['id']}, {$oneProductCart['count']}, {$orderId})");
    }

    $_SESSION['cart'] = [];
}

function calculateCostOrder($order) {
    $cost = 0;

    foreach ($order as $onePosition) {
        $cost += $onePosition['product_count'] * $onePosition['price'];
    }

    return $cost;
}

function getOrdersByUserId($userId) {
    $allOrders = queryAll("select * from order_user where order_user.id_user={$userId}");

    foreach ($allOrders as &$oneOrder) {
        $order = queryAll("select * from order_full_info inner join products on products.id=order_full_info.id_product where id_order={$oneOrder['id']}");
        $order = getOneImageProducts($order, 'id_product');
        $cost = calculateCostOrder($order);
        $oneOrder += ['order' => $order];
        $oneOrder += ['cost' => $cost];
        $state = queryOne("select * from status_order where id={$oneOrder['id_status']}")['status'];
        $oneOrder += ['state' => $state];
    }
    
    return $allOrders;
}
?>