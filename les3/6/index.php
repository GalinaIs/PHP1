<?php
    $title = 'Lesson 3 Ex. 6';

    function renderOneLi ($stringMenu) {
        echo '<li><a href="#">' . $stringMenu . "</a></li>";
    }
    
    function renderOneItemMenu ($key, $value) {
        if (is_int($key)) {
            renderOneLi($value);
        } else {
            renderOneLi($key);
            renderMenu($value);
        }
    }
    
    function renderMenu ($menu) {
        echo '<ul>';
        if (is_string($menu)) {
            renderOneItemMenu(0, $menu);
        } else {
            foreach ($menu as $key => $value) {
                renderOneItemMenu($key, $value);
            }
        }
        echo '</ul>';
    }
    
    $menu = [
        'Меню1',
        'Меню2',
        'Меню3',
        'Меню4',
    ];
    
    $menuWithSubmenu = [
        'Меню1',
        'Меню2' => [
            'Подменю1',
            'Подменю2',
            'Подменю3' => [
                '1',
                '2'
            ],
        ],
        'Меню3',
        'Меню4' => 'Подменю',
    ]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
</head>
<body>
    <p>Меню без подменю</p>
    <?= renderMenu($menu); ?>
    <p>Меню с подменю</p>
    <?= renderMenu($menuWithSubmenu); ?>
</body>
</html>