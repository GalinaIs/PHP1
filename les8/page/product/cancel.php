<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    execute("UPDATE order_user SET id_status=5 where id={$id}");

    echo json_encode(['success' => 'ok', 'message' => 'Заказ успешно отменен!']);
 }
?>