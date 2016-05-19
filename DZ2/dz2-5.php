<?php
/*
Функция должна принимать в качестве аргумента массив чисел и возвращать так
же массив, но отсортированный по возрастанию. Системные функции сортировки не
использовать.
Пример: В функцию передали [1, 22, 5, 66, 3, 57]. Вернула: [1, 3, 5, 22, 57, 66]
*/

$arr = [2,33,44,11,66,22];

function mergeSort(array $arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }

    $left  = array_slice($arr, 0, (int)($count/2));
    $right = array_slice($arr, (int)($count/2));

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge(array $left, array $right) {
    $ret = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            array_push($ret, array_shift($left));
        } else {
            array_push($ret, array_shift($right));
        }
    }

    array_splice($ret, count($ret), 0, $left);
    array_splice($ret, count($ret), 0, $right);

    return $ret;
}

$result = mergeSort($arr);

echo '<pre>';
print_r($result);
echo '</pre>';

/*
Дополнительно (не обязательно): Доработать функцию так, чтобы в качестве
второго аргумента она принимала название функции сортировки. И сортировала
массив с использованием этой функции. В идеале добавить 2 функции сортировки,
одна из которых должна быть задана по умолчанию.
*/
