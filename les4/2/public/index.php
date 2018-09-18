<?php
    include __DIR__ . "/../engine/uploads.php";

    function renderGallery ($pathToMinImageDir, $pathToFullImageDir) {
        if ($handle = opendir($pathToMinImageDir)) {
            while ($file = readdir($handle)) {
                if ($file == '.' || $file == '..') {
                    continue;
                }

                if (is_dir($pathToMinImageDir . $file)) {
                    renderGallery($pathToMinImageDir . $file . '/', $pathToFullImageDir . $file . '/');
                } else {
                    echo "<a href=" . $pathToFullImageDir . $file ." target='_blank'><img src=" . $pathToMinImageDir . 
                        $file ."></a>";
                }
            }

            closedir($handle);
        }
    }

    function resizeAllImage($pathToFullImageDir, $pathToMinImageDir) {
        if ($handle = opendir($pathToFullImageDir)) {
            while ($file = readdir($handle)) {
                if ($file == '.' || $file == '..') {
                    continue;
                }

                if (is_dir($pathToFullImageDir . $file)) {
                    if (!file_exists($pathToMinImageDir . $file . '/')) {
                        mkdir($pathToMinImageDir . $file . '/');
                    }
                    resizeAllImage($pathToFullImageDir . $file . '/', $pathToMinImageDir . $file . '/');
                } else {
                    img_resize($pathToFullImageDir . $file, $pathToMinImageDir . $file, 150, 150);
                }
            }
            closedir($handle);
        }
    }

    //resizeAllImage('image/full_image/', 'image/min_image/'); 
    //запускала для полного перегона существующих картинок в миниатюры.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>
    <h2>Галерея</h2>
    <div id="gallery">
        <?= renderGallery('image/min_image/', 'image/full_image/'); ?> 
    </div>
    <h2>Выберите файл для добавления в галерею</h2>
    <form action="" enctype="multipart/form-data" method="POST">
        <input type="file" name="image_file">
        <button>Отправить файл в галлерею</button>
    </form>
    <div class="message_file"><?= $error ?></div>
    
</body>
</html>
