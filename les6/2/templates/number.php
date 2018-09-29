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
    <h2>Калькулятор</h2>
    <form action="" method="POST">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <button name="operation" value="+">+</button>
        <button name="operation" value="-">-</button>
        <button name="operation" value="*">*</button>
        <button name="operation" value="/">/</button>
    </form>
    <div class="result">
    <?php if (is_null($result)): ?>
        Результат операции <?= $operation ?> для чисел <?= $number1; ?> и <?= $number2; ?> равен: на ноль делить нельзя!
        <?php elseif ($result === false) :?>
        <?php else: ?>
        Результат операции <?= $operation ?> для чисел <?= $number1; ?> и <?= $number2; ?> равен: <?= $result; ?>
        <?php endif; ?>
    </div>
</body>
</html>