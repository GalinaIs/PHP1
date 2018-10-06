<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/style/style.css" rel="stylesheet">
    <title>Lesson 8</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
    <header>
        <ul class="menu">
            <li><a href="/product">Продукты</a></li>
            <li><a href="/cart">Корзина</a></li>
            <li><a href="/auth/account">Личный кабинет</a></li>
            <li><a href="/product/change">Изменить товары на сайте</a></li>
        </ul>
    </header>
    <div class="content"><?= $content; ?></div>
    <footer>© Все права защищены</footer>
</body>
</html>