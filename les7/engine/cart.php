<?php
function getFullCart($cart) {
    foreach($cart as &$oneProductCart) {
        $oneProduct = queryOne("select* from products where id={$oneProductCart['id']}");
        $oneProductCart += ['name' => $oneProduct['name']];
        $oneProductCart += ['price' => $oneProduct['price']];
        $oneProductCart += ['cost' => $oneProductCart['price'] * $oneProductCart['count']];
        
        $image = queryOne("select * from image_products where products_id='{$oneProductCart['id']}'");
        $oneProductCart += ['min_image' => $image['path']];
    }

    return $cart;
}
?>