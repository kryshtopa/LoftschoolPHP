<?php
/*
1. Создать 3 функции, принимающие по 1 строковому параметру и выводящие на
экран разные фразы с переданным параметром.
2. Создать 4ю функцию, которая будет принимать 2 параметра:
a. целое число
b. строку и в зависимости от переданного числа функция должна вызвать
одну из трёх функций со строковым параметром (1 – первая функция, 2 –
вторая, 3 -третья).
3. Четвёртая функция также должна обрабатывать некорректный ввод целого
числа.
*/

//$func = function($num, $str) {
//
//    $func1 = function($str) {
//        echo 'В траве сидел ' . $str;
//    };
//    $func2 = function($str) {
//        echo 'Белеет мой ' . $str . ' такой одинокий';
//    };
//    $func3 = function($str) {
//        echo 'Ты знаешь, все в твоих руках и даже ' . $str;
//    };
//
//    if (is_int($num)) {
//        if ($num == 1) {
//            $func1($str);
//        } elseif ($num == 2) {
//            $func2($str);
//        } elseif ($num == 3) {
//            $func3($str);
//        } else {
//            echo 'Число слишком большое! Я умею только до трех!';
//        }
//    } else {
//        echo 'Нужно ввести целое число!';
//    }
//};
//
//$func(2, 'терминатор');

/*
Дополнительно (не обязательно): Переделать четвёртую функцию так, чтобы она
вместо первого параметра принимала массив с названиями функций. И выбирала
случайно, какую функцию запускать.
*/

$func1 = function ($str) {
    echo 'В траве сидел ' . $str;
};
$func2 = function ($str) {
    echo 'Белеет мой ' . $str . ' такой одинокий';
};
$func3 = function ($str) {
    echo 'Ты знаешь, все в твоих руках и даже ' . $str;
};

$arr = [$func1, $func2, $func3];

$func = function ($arr, $str) {

    $num = rand(1, 3);

    if ($num == 1) {
        $arr[0]($str);
    } elseif ($num == 2) {
        $arr[1]($str);
    } elseif ($num == 3) {
        $arr[2]($str);
    }
};

$func($arr, 'терминатор');
