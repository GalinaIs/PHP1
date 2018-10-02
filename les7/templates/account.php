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
    <h3>Добро пожаловать, <?= $user['name']; ?>!</h3>
    <p>Вы вошли в личный кабинет</p>
    <p>Ваш логин: <?= $user['login']; ?></p>
</body>
</html>