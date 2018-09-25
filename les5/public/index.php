<?php
header("Content-type: text/html; charset=utf-8");

include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "gallery.php";
include ENGINE_DIR . "files.php";
include ENGINE_DIR . "base.php";
include ENGINE_DIR . "db.php";
include VENDOR_DIR . "funcImgResize.php";

$error = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fileName = uploadFile("image/full_image/", $error, 'image_file');

    if (!$error) {
        img_resize(PUBLIC_DIR . 'image/full_image/' . $fileName, PUBLIC_DIR . '/image/min_image/' . $fileName, 150, 
            150);
        addImageInDB($fileName, 'image/min_image/' . $fileName, 'image/full_image/' . $fileName);
        redirect($_SERVER['PHP_SELF']);
    } 
}

//getGallery('image/min_image/', 'image/full_image/', $gallery_min, $gallery_full); - в случае чтения из директории
$gallery = getGalleryFromDB();
//fillDBFromDir('image/min_image/', 'image/full_image/'); //- для заполнения бд значениями из папки.

include TEMPLATES_DIR . "gallery.php";
?>