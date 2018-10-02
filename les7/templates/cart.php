<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Lesson 7</title>
</head>
<body>
    <h2>Корзина пользователя: </h2>
    <div id="products">
    <?php foreach($cart as $oneProductCart): ?>
        <div class="view_product">
            <a target="_blank " href="<?= "oneProduct.php?id={$oneProductCart['id']}" ?>">
                <img class="my_img" src="image/products/min/<?= $oneProductCart['min_image']; ?>" />
                <div class="description">
                    <h3><?= $oneProductCart['name']; ?></h3>
                </div>
                <div class="price">Цена:<br> 
                    <?= $oneProductCart['price']; ?> руб.
                </div>
                <div class="price">Количество:<br> 
                    <?= $oneProductCart['count']; ?> шт.
                </div>
                <div class="price">Общая стоимость:<br> 
                    <?= $oneProductCart['cost']; ?> руб.
                </div>
            </a>
            <form action="cart.php" method="POST" class="my_form">
                <input type="number" min="1" max="100" value="<?= $oneProductCart['count']; ?>" name="count" />
                <input class="invisible" name="action" value="change" />
                <button name="id_product" value="<?= $oneProductCart['id']?>">Изменить количество</button>
            </form>
            <form action="cart.php" method="POST" class="my_form form_delete">
                <input class="invisible" name="action" value="delete" />
                <button name="id_product" value="<?= $oneProductCart['id']?>">Удалить товар из корзины</button>
            </form>
        </div>
    <?php endforeach;?>
    <h3>Общая стоимость Вашего заказа: <?= $cost; ?> руб.</h3>
    </div>
</body>
</html>