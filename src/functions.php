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