<?php
/*
Создайте переменную $str, которой присвойте строковое значение,
содержащее отдельные слова разделённые пробелом. Выведите строку на экран.
Затем разбейте строку на массив. Выведите массив. Затем используя циклы while
или do-while (на ваше усмотрение) развернуть массив и склеить в строку используя
любой символ, кроме пробела. Вывести результат.
*/

$str = 'My homework string';
echo $str;


echo "<hr>";


echo '<pre>';
$array = explode(' ', $str);
print_r($array);
echo '</pre>';


echo "<hr>";


$i = 0;
$lenght = count($array);
while ($i < $lenght) {
    echo "$array[$i]" . "<br>";
    $i++;
};


echo "<hr>";


$strNew = join('_', $array);
echo $strNew;