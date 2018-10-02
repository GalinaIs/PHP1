<?php 
function getProducts(){
    return queryAll("Select * from products");
}

function getOneImageProducts($products) {
    foreach ($products as &$oneProduct) {
        $image = queryOne("select * from image_products where products_id='{$oneProduct['id']}'");
        $oneProduct += ['min_image' => $image['path']];
    }

    return $products;
}

function getOneProduct($id){
    $id = (int)mysqli_real_escape_string(getConnection(), $id);
    return queryOne("select* from products where id={$id}");
}

function getAllImagesOneProduct($id) {
    $allImages = queryAll("select * from image_products where products_id='{$id}'");
    
    $images = [];
    foreach ($allImages as $oneImage) {
        $images[] = $oneImage['path'];
    }
    return $images;
}
?>