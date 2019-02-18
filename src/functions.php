<?php

function task1($array, $switcher = false)
{
    if (!$array) {
        return 'Данные не переданы';
    }
    if ($switcher === true) {
        return implode(' ', $array);
    }
    for ($i = 0; $i < sizeof($array); $i++) {
        echo "<p>$array[$i]</p>";
    }
}

function task2()
{
    if (func_num_args() > 1 && is_string(func_get_arg(0))) {
        $action = func_get_arg(0);
        $result = func_get_arg(1);

        for ($i = 2; $i < func_num_args(); $i++) {
            switch ($action) {
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
                    if (func_get_arg($i) !== 0) {
                        $result /= func_get_arg($i);
                    } else {
                        echo "На ноль делить нельзя";
                        return;
                    }
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

function task3($rows, $cols)
{
    if (is_int($rows) && is_int($cols)) {
        echo "<table style=text-align:center>";

        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr>";
            for ($td = 1; $td <= $cols; $td++) {
                $result = $tr * $td;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo 'переданы неверные аргументы' . '<br>';
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

function task6($file_name = 'hello')
{
    file_put_contents("$file_name.txt", 'Hello again!');
    echo file_get_contents("$file_name.txt") . '<br>';
}