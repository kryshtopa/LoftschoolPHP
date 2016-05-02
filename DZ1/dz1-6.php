<?php
/*
Создайте массив $bmw с ячейками: model, speed, doors, year. Заполните ячейки
значениями соответственно: “X5”, 120, 5, “2015”. Создайте массивы $toyota и $opel
аналогичные массиву $bmw (заполните данными).
Выведите значения всех трёх массивов в виде:
Модель: model
Скорость: speed
Двери: doors
Год выпуска: year
Например:
Модель: X5
Скорость: 120
Двери: 5
Год выпуска: 2015
*/

$bmw = [model,speed,doors,year];
$bmw[model] = 'X5';
$bmw[speed] = 120;
$bmw[doors] = 5;
$bmw[year] = '2015';

$toyota = [model,speed,doors,year];
$toyota[model] = 'Land Cruiser';
$toyota[speed] = 150;
$toyota[doors] = 5;
$toyota[year] = '1994';

$opel = [model,speed,doors,year];
$opel[model] = 'Corsa';
$opel[speed] = 170;
$opel[doors] = 4;
$opel[year] = '2010';



print_r('Модель: ' . $bmw[model] . '<br>');
print_r('Скорость: ' . $bmw[speed] . '<br>');
print_r('Двери: ' . $bmw[doors] . '<br>');
print_r('Год выпуска: ' . $bmw[year] . '<br>');

echo '<br>';

print_r('Модель: ' . $toyota[model] . '<br>');
print_r('Скорость: ' . $toyota[speed] . '<br>');
print_r('Двери: ' . $toyota[doors] . '<br>');
print_r('Год выпуска: ' . $toyota[year] . '<br>');

echo '<br>';

print_r('Модель: ' . $opel[model] . '<br>');
print_r('Скорость: ' . $opel[speed] . '<br>');
print_r('Двери: ' . $opel[doors] . '<br>');
print_r('Год выпуска: ' . $opel[year] . '<br>');