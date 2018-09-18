<?php

include __DIR__ . "/../engine/funcImgResize.php";

$pathToFullImage = "image/full_image/";
$pathToMinImage = "image/min_image/";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image_file'])) {
        $fileName = $_FILES['image_file']['name'];
        $fileFullImage = $pathToFullImage . $fileName;
        $fileMinImage = $pathToMinImage . $fileName;

        $error = '';
        if ($_FILES['image_file']['size'] >= 1048576) {
            $error .= "Файл не был загружен, т.к. размер превышает максимальный размер - 1 Мб <br>";
        }
        if (strripos($_FILES['image_file']['type'],'image') === false){
            $error .= "Файл не был загружен, т.к. необходимо загрузить картинку <br>";
        }
        if (!$error) {
            if (file_exists($fileFullImage) || file_exists($fileMinImage)) {
                $pos = strrpos($fileName, '.');
                $fileNameShort = substr($fileName, 0, $pos);
                $fileExtension = substr($fileName, $pos);
                $fileName = $fileNameShort . uniqid() . $fileExtension;

                $fileFullImage = $pathToFullImage . $fileName;
                $fileMinImage = $pathToMinImage . $fileName;
            }

            img_resize($_FILES['image_file']['tmp_name'], $fileMinImage, 150, 150);
            move_uploaded_file($_FILES['image_file']['tmp_name'], $fileFullImage);
            header("Location:" . $_SERVER['PHP_SELF']);
        }
    }
}

?>