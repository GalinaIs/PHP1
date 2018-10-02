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
    <div id="regist">
        <h2><?= $message; ?></h2>
        <h3>Форма для регистрации на сайте: </h3>
        <form action="" method="POST" class="regist">
            <input type="text" name="name" placeholder="Введите имя" />
            <input type="login" name="login" placeholder="Введите логин" />
            <input type="password" name="password" />
            <input type="submit" />
        <form>
    </div>
</body>
</html>