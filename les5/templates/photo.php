<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Lesson 5 - One Image</title>
</head>
<body>
    <h2>Картинка</h2>
    <div id="one_image">
        <img src="<?= $infoImage['full_path'] ?>" />
    </div>
    <h4>Картинка просмотрена: <?= $infoImage['count_view'] ?> <?= $str ?></h4>
</body>
</html>
