<?php
    $title = 'Lesson 3 Ex. 6';

    function printOneItemMenu ($titleMenu) {
        echo '<li><a href="#">' . $titleMenu . '</a></li>';
    }

    function printMenu ($menuArray) {
        echo '<ul>';
        foreach($menuArray as $value) {
            printOneItemMenu($value);
        }
        echo '</ul>';
    }

    function printMenuWithSubmenu($menuWithSubmenuArray) {
        echo '<ul>';
        foreach($menuWithSubmenuArray as $key => $value) {
            printOneItemMenu($key);
            if ($value == '') {
                continue;
            }

            if (is_string($value)) {
                echo '<ul>';
                printOneItemMenu($value);
                echo '</ul>';
            } else {
                printMenu($value);
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
        'Меню1' => '',
        'Меню2' => [
            'Подменю1',
            'Подменю2',
            'Подменю3',
        ],
        'Меню3' => '',
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
    <?= printMenu($menu); ?>
    <p>Меню с подменю</p>
    <?= printMenuWithSubmenu($menuWithSubmenu);?>
</body>
</html>