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
    <h2>Каталог товаров в интернет-магазине "Настасья"</h2>
    <div id="products">
    <?php foreach($products as $oneProduct): ?>
        <div class="view_product">
            <a target="_blank " href="<?= "oneProduct.php?id={$oneProduct['id']}" ?>">
                <img src="image/products/min/<?= $oneProduct['min_image']; ?>" />
                <div>
                    <h3><?= $oneProduct['name']; ?></h3>
                    <p><?= $oneProduct['short_description']; ?></p>
                </div>
                <div class="price"><?= $oneProduct['price']; ?> руб.</div>
            </a>
            <form action="cart.php" method="POST">
                <input type="number" min="1" max="100" value="1" name="count" />
                <input class="invisible" name="action" value="add" />
                <button name="id_product" value="<?= $oneProduct['id']?>">Добавить в корзину</button>
            </form>
        </div>
    <?php endforeach;?>
    </div>
</body>
</html>