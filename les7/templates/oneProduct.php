<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Lesson 7 - One Product</title>
</head>
<body>
    <?php if($oneProduct): ?>
        <h2>Подробное описание товара: </h2>
        <div id="one_product">
            <h2><?= $oneProduct['name']; ?></h2>
            <div class="images">
                <?php foreach($images as $image): ?>
                <img src="image/products/full/<?= $image ?>" />
                <?php endforeach; ?>
            </div>
            <p><?= $oneProduct['full_description']; ?></p>
            <h2>Цена: <?= $oneProduct['price']; ?> руб.</h2>
            <form action="cart.php" method="POST">
                <input type="number" min="1" max="100" value="1" name="count" />
                <input class="invisible" name="action" value="add" />
                <button name="id_product" value="<?= $oneProduct['id']?>">Добавить в корзину</button>
            </form>
        </div>
    <?php else: ?>
        <h2>Запрашиваемый товар не найден!</h2>
    <?php endif; ?>
</body>
</html>
