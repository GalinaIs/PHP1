<?php 
function getProducts(){
    return queryAll("Select * from products");
}

function getOneImageProducts($products, $param = 'id') {
    foreach ($products as &$oneProduct) {
        $image = queryOne("select * from image_products where products_id='{$oneProduct[$param]}'");
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

function addNewProduct($name, $price, $shortDesc, $fullDesc){
    execute("insert into products (name, price, short_description, full_description) values ('{$name}', {$price}, '{$shortDesc}', '{$fullDesc}')");

    $idProduct = queryOne("select * from products ORDER BY id DESC")['id'];
    $fileName = uploadFile(PUBLIC_DIR . 'image/products/full/', $error, 'file');
    if (!$error) {
        execute("insert into image_products (path, products_id) values ('{$fileName}', {$idProduct})");
        
        img_resize(PUBLIC_DIR . 'image/products/full/' . $fileName, PUBLIC_DIR . 'image/products/min/' . $fileName, 
            150, 150);
    }
}

function changeProduct($name, $price, $shortDesc, $fullDesc, $idProduct) {

    if ($name !== '') {
        execute("UPDATE products SET name='{$name}' where id={$idProduct}");
    }

    if ($price !== '') {
        execute("UPDATE products SET price={$price} where id={$idProduct}");
    }

    if ($shortDesc !== '') {
        execute("UPDATE products SET short_description='{$shortDesc}' where id={$idProduct}");
    }

    if ($fullDesc !== '') {
        execute("UPDATE products SET full_description='{$fullDesc}' where id={$idProduct}");
    }
}

function deleteProduct($id) {
    execute("DELETE FROM products where id='{$id}'");
    execute("DELETE FROM image_products where products_id='{$id}'");
}
?>