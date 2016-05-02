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
    Используя цикл for, выведите таблицу умножения размером 10x10. Если
    значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
    Если значение индекса строки и столбца Нечётный, то результат вывести в
    квадратных скобках. В остальных случаях результат выводить просто числом.
    */

        for ($y = 1; $y <= 10; $y++) {

            echo '<tr>'; // создаем 10 рядов таблицы

            for ($x = 1; $x <= 10; $x++) { // создаем 10 столбцов таблицы
                if ($y%2 == 0 && $x%2 == 0)
                    echo '<td style="background-color: lightblue">' . '[' . $y * $x . ']' . '</td>'; // для четных

                elseif ($y%2 !== 0 && $x%2 !== 0)
                    echo '<td style="background-color: lightyellow">' . '(' . $y * $x . ')' . '</td>'; // для нечетных

                else
                    echo '<td style="background-color: lightsalmon">' . $y * $x . '</td>'; // для всех остальных
            }

            echo '</tr>';
        }

    ?>

    </table>

</body>
</html>
