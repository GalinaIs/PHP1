<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idProduct = $_POST['id_product'];
    
    deleteProduct($idProduct);
    
    redirect($_SERVER['HTTP_REFERER']);
 }
?>