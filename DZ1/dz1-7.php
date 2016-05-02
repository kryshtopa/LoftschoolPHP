<?php
/*
Создать ассоциативный массив $cars. Данные взять из задания №6. Требуется,
чтобы все данные были в одном массиве. Реализовать через вложенные массивы.
Вывести массив в удобочитаемом виде через конструкцию print_r и через foreach.
*/


$cars = [

    $bmw = [
        model => 'X5',
        speed => 120,
        doors => 5,
        year => '2015'
    ],

    $toyota = [
        model => 'Land Cruiser',
        speed => 150,
        doors => 5,
        year => '1994'
    ],

    $opel = [
        model => 'Corsa',
        speed => 170,
        doors => 4,
        year => '2010'
    ]
];

foreach ($cars as $value ) {
    print_r('Модель: ' . $value[model] . '<br>');
    print_r('Скорость: ' . $value[speed] . '<br>');
    print_r('Двери: ' . $value[doors] . '<br>');
    print_r('Год выпуска: ' . $value[year] . '<br><br>');
};