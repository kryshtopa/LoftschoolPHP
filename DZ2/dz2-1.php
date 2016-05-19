<?php
/*
Функция должна принимать массив строк и выводить каждую строку в отдельном
параграфе.
*/

function printP($arr) {
    foreach ($arr as $value) {
        print_r ('<p>'. $value . '</p>');
    };
}

$arr = ['aaa','bbb','ccc','ddd'];

printP($arr);



/*
Дополнительно (не обязательно): При выводе каждую строку выводить внутри
параграфа случайное число раз.
*/

echo '<br><br><b>' . 'Дополнительно:' . '</b><br>';

function printPRand($arr) {
    foreach ($arr as $value) {
        echo '<p>';
        for ($i=1; $i<=rand(2, 10); $i++ ) {
            echo $value . ' ';
        }
        echo '</p>';
    };
}

printPRand($arr);