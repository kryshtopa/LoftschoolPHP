<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <style>
        body {height: 100vh; margin:0;}
        table {text-align: center; font-weight: bold; font-family: sans-serif; box-shadow: 0 0 75px 10px lightblue; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);}
        td {padding: 15px;}
    </style>
</head>
<body>

<table>

    <?php

    /*
    Функция должна принимать два параметра – целые числа. Если в функцию
    передали 2 целых числа, то функция должна отобразить таблицу умножения размером
    со значения параметров, переданных в функцию. В остальных случаях выдавать
    корректную ошибку.
    Например: tabl(4,3), то функция должна нарисовать следующий результат:
    1 2 3 4
    2 4 6 8
    3 6 9 12
    */

    $func = function($valX,$valY) {
        for ($y = 1; $y <= $valY; $y++) {

            echo '<tr>'; // создаем ряды таблицы

            for ($x = 1; $x <= $valX; $x++) { // создаем столбцы таблицы
                echo '<td style="background-color: lightblue">' . $y * $x . '</td>';
            }

            echo '</tr>';
        };
    };

    // Запускает основную часть задания
//    $func(10,6);
    
    /*
    Дополнительно (не обязательно): Написать ещё одну функцию, которая бы
    вызывала первую функцию с двумя случайными числами. Использовать генератор
    случайных чисел.
    */

    $funcRand = function($func) {
        $x = rand(1,10);
        $y = rand(1,10);

        return $func($x,$y);
    };

    // Запускает дополнительную часть задания
    $funcRand($func);

    ?>

</table>

</body>
</html>