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
    echo sprintf('%s: <br> %s <br>', $key, implode(', ', $value));
}

?>