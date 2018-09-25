<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Lesson 5</title>
</head>
<body>
    <h2>Галерея</h2>
    <div id="gallery">
    <?php foreach($gallery as $image): ?>
        <a target="_blank " href="<?= "photo.php?id={$image['id']}" ?>">
            <img src="<?= $image['min_path'] ?>" />
        </a>
    <?php endforeach;?>
    </div>
    <h2>Выберите файл для добавления в галерею</h2>
    <form action="" enctype="multipart/form-data" method="POST">
        <input type="file" name="image_file">
        <button>Отправить файл в галлерею</button>
    </form>
    <div class="message_file"><?= $error ?></div>
</body>
</html>
