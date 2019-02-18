<?php

function task1($massive = [], $switcher = false)
{
    if (!$massive) {
        return 'Данные не переданы';
    }
    if ($switcher === true) {
        return implode($massive);
    }
    for ($i = 0; $i < sizeof($massive); $i++) {
        echo "<b>$massive[$i]</b><br>";
    }
}

function task2()
{
    if (func_num_args() > 1 && is_string(func_get_arg(0))) {
        $x = func_get_arg(0);
        $result = func_get_arg(1);

        for ($i = 2; $i < func_num_args(); $i++) {
            switch ($x) {
                case '+':
                    $result += func_get_arg($i);
                    break;
                case '-':
                    $result -= func_get_arg($i);
                    break;
                case '*':
                    $result *= func_get_arg($i);
                    break;
                case '/':
                    $result /= func_get_arg($i);
                    break;
                default:
                    $result = 'Передан неверный первый аргумент';
            }
        }
    } else {
        $result = 'Мало данных';
    }
    echo $result . '<br>';
}

function task3($x = '', $y = '')
{
    if (is_int($x) && is_int($y)) {
        echo "<table style=text-align:center>";

        for ($a = 1; $a <= $x; $a++) {
            echo "<tr>";
            for ($b = 1; $b <= $y; $b++) {
                $result = $a * $b;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo 'переданы неверные аргументы';
    }
}

function task4()
{
    echo date('d:m:Y H:i') . '<br>';
    echo strtotime('24.02.2016 00:00:00') . '<br>';
}

function task5()
{
    $str = 'Карл у Клары украл Кораллы';
    $str1 = 'Две бутылки лимонада';

    echo str_replace('К', '', $str) . '<br>';
    echo str_replace('Две', 'Три', $str1) . '<br>';
}

function task6($name_file = 'hello')
{
    file_put_contents("$name_file.txt", 'Hello again!');
    echo file_get_contents("$name_file.txt") . '<br>';
}