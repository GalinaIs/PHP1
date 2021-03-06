<?php

$city = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
    ],
    'Рязанская область' => [
        'Рязань',
        'Касимов',
        'Скопин',
        'Кораблино'
    ],
    'Ростовская область' => [
        'Ростов-на-Дону',
        'Таганрог',
        'Волгодонск',
        'Шахты'
    ]
];

foreach($city as $key => $value) {
    echo sprintf('%s: <br>', $key);
    
    $cityArea = [];
    foreach($value as $valueInside) {
        if (mb_substr($valueInside, 0, 1) == 'К') {
            $cityArea[] = $valueInside;
        }
    }

    if (empty($cityArea)) {
        echo 'Нет ни одного города на букву "К"<br>';
    } else {
        echo implode(', ', $cityArea) . '<br>';
    }
}

?>