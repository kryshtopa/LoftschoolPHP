<?php
/*
Создайте 5 переменных с разными скалярными типами и присвойте им
произвольные значения. Затем создайте переменные: $name, $age, $city, $job и
присвойте им соответствующие данные. $job – логическая (да/нет). Есть работа? С
помощью echo выведите все переменные в удобочитаемом виде.
*/

$bool = true; // Логическая. true/false
$int = 30;
$str = 'Herceg Novi';
$str2 = 'Dima';
$str3 = 'the 5th element';

$name = $str2;
$age = $int;
$city = $str;
$job = $bool;

echo 'Имя - ' . $name . ', ' . 'Возраст - ' . $age . ', ' . 'Город - ' . $city . ', ' . 'Работа - ' . $job;