<?php
    include __DIR__ . "/../engine/uploads.php";

    function renderGallery ($pathToImageDir) {
        if ($handle = opendir($pathToImageDir)) {
            while ($file = readdir($handle)) {
                if ($file == '.' || $file == '..') {
                    continue;
                }

                if (is_dir($pathToImageDir . $file)) {
                    renderGallery($pathToImageDir . $file . '/');
                } else {
                    echo "<a href=" . $pathToImageDir . $file ." target='_blank'><img src=" . $pathToImageDir . $file
                    ."></a>";
                }
            }

            closedir($handle);
        }
    }
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
        <?= renderGallery("image/"); ?> 
    </div>
    <h2>Выберите файл для добавления в галерею</h2>
    <form action="" enctype="multipart/form-data" method="POST">
        <input type="file" name="image_file">
        <button>Отправить файл в галлерею</button>
    </form>
    <div class="message_file"><?= $error ?></div>
    
</body>
</html>
