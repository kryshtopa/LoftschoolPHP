<?php
/*
Создайте константу и присвойте ей значение. Проверьте, существует ли
константа, которую Вы хотите использовать. Выведите значение данной константы.
Попытайтесь изменить значение созданной константы. Получилось?
*/

define('Name', 'Lzhe Dmitry', true);
echo Name . '<br>';

define('Name', 'Dmitry');
echo Name;
