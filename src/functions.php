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
        echo "<b>$massive[$i]</b>";
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
    echo $result;
}
