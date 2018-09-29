<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Lesson 6 - One Product</title>
</head>
<body>
    <?php if($oneProduct): ?>
        <h2>Подробное описание товара: </h2>
        <div id="one_product">
            <h2><?= $oneProduct['name']; ?></h2>
            <div class="images">
                <?php foreach($pathFullImage as $image): ?>
                <img src="image/products/full/<?= $image ?>" />
                <?php endforeach; ?>
            </div>
            <p><?= $oneProduct['full_description']; ?></p>
            <h2>Цена: <?= $oneProduct['price']; ?> руб.</h2>
        </div>
    <?php else: ?>
        <h2>Запрашиваемый товар не найден!</h2>
    <?php endif; ?>
</body>
</html>
