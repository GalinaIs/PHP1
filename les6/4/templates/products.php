<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Lesson 6</title>
</head>
<body>
    <h2>Каталог товаров в интернет-магазине "Настасья"</h2>
    <div id="products">
    <?php foreach($products as $oneProduct): ?>
    <a target="_blank " href="<?= "oneProduct.php?id={$oneProduct['id']}" ?>">
        <img src="image/products/min/<?= $oneProduct['path_min']; ?>" />
        <div class="description">
            <h3><?= $oneProduct['name']; ?></h3>
            <p><?= $oneProduct['short_description']; ?></p>
        </div>
        <div class="price"><?= $oneProduct['price']; ?> руб.</div>
    </a>
    <?php endforeach;?>
    </div>
</body>
</html>