<?php

$pathToImage = "image/";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image_file'])) {
        $fileName = $pathToImage . $_FILES['image_file']['name'];
        $error = '';
        if ($_FILES['image_file']['size'] >= 1048576) {
            $error .= "Файл не был загружен, т.к. размер превышает максимальный размер - 1 Мб <br>";
        }
        if (strripos($_FILES['image_file']['type'],'image') === false){
            $error .= "Файл не был загружен, т.к. необходимо загрузить картинку <br>";
        }
        if (!$error) {
            if (file_exists($fileName)) {
                $pos = strrpos($fileName, '.');
                $fileNameShort = substr($fileName, 0, $pos);
                $fileExtension = substr($fileName, $pos);
                $fileName = $fileNameShort . uniqid() . $fileExtension;
            }
            move_uploaded_file($_FILES['image_file']['tmp_name'], $fileName);
            header("Location:" . $_SERVER['PHP_SELF']);  
        }
    }
}

?>