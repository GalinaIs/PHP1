<?php 
function getProducts(){
    return queryAll("Select * from products");
}

function getPathMinImage($products) {
    foreach ($products as &$oneProduct) {
        $file = $oneProduct['path_dir'] . "/" . getOneFileFromDir('image/products/min/' . $oneProduct['path_dir']);
        $oneProduct += ['path_min' => $file];
    }

    return $products;
}

function getOneProduct($id){
    $id = (int)mysqli_real_escape_string(getConnection(), $id);
    return queryOne("select* from products where id={$id}");
}

function getPathFullImage($oneProduct) {
    $filesArray = getAllFilesFromDir('image/products/full/' . $oneProduct['path_dir']);
    foreach ($filesArray as &$file) {
        $file = $oneProduct['path_dir'] . "/" . $file;
    }
    return $filesArray;
}
?>