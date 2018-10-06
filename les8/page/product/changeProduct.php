<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $shortDesc = $_POST['short_desc'];
    $fullDesc = $_POST['full_desc'];
    $idProduct = $_POST['id_product'];

    changeProduct($name, $price, $shortDesc, $fullDesc, $idProduct);
    
    redirect($_SERVER['HTTP_REFERER']);
 }
?>