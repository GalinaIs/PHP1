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
    <h2>Отзывы: </h2>
    <div id="feedback">
    <?php foreach($feedbacks as $oneFeedback): ?>
        <div class="message">
            <p>Имя пользователеля: <?= $oneFeedback['name_user'] ?></p>
            <p>Тема отзыва: <?= $oneFeedback['subject'] ?></p>
            <p>Текст отзыва: <?= $oneFeedback['message'] ?></p>
        </div>
    <?php endforeach;?>
    </div>
    <h2>Отправить отзыв: </h2>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Ваше имя: " require>
        <input type="text" name="subject" placeholder="Тема сообщения: " require>
        <textarea rows="5" name="message" require></textarea>
        <button>Отправить отзыв</button>
    </form>
</body>
</html>
