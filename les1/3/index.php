<?php
    $a = 5;
    $b = '05';

    var_dump($a == $b);         
    /* Почему true? - сначала hp попробует привести данные к одному типуБ а затем сравнить их значение, поэтому здесь
     истина */

    var_dump((int)'012345');     
    /* Почему 12345? - потому, что строку '012345' хотим привести к целочисленному числу, поэтому получаем 12345*/

    var_dump((float)123.0 === (int)123.0); 
    /* Почему false? Сравниваем одинаковые числа, но явно приводим их к разному типу, а тождественное сравнение
    сравнивает значение и типы данные, поэтому получаем ложь.*/

    var_dump((int)0 === (int)'hello, world'); 
    /* Почему true? Строку 'hello, world' попытаемся привести к целочисленному числу, этого сделать не удалось, поэтому получаем 0 (строка не начинается с цифр), тип данных - int, поэтому тождественное сравнение с (int)0 дает правду.*/
?>