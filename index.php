<?php
//Задание #1
$name = 'Николай';
$age = '31';

echo "Меня зовут: $name<br>";
echo "Мне $age год<br>";
echo "\"!|\\/'\"\\<br>";

//Задание #2
const DRAWINGS = 80;
const DRAWINGS_FELT_PEN = 23;
const DRAWINGS_PENCIL = 40;

$drawings_paints = DRAWINGS - DRAWINGS_FELT_PEN - DRAWINGS_PENCIL;

echo "Красками выполнено $drawings_paints рисунков <br>";

//Задание #3
$age = rand(0, 100);

if (18 <= $age && $age <= 65) {
    echo 'Вам еще работать и работать<br>';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию<br>';
} elseif (1 <= $age && $age <= 17) {
    echo 'Вам ещё рано работать<br>';
} else {
    echo 'Неисвестный возраст<br>';
}

//Задание #4
$day = rand(0, 10);

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день<br>';
        break;
    case 6:
    case 7:
        echo 'Это выходной день<br>';
        break;
    default:
        echo 'Неизвестный день<br>';
}

//Задание #5
$bmw = [
    'model' => "X5",
    'speed' => 120,
    'doors' => 5,
    'year' => "2015"
];

$toyota = [
    'model' => "Rav4",
    'speed' => 180,
    'doors' => 5,
    'year' => "2019"
];

$opel = [
    'model' => "Astra",
    'speed' => 150,
    'doors' => 5,
    'year' => "2011"
];

$cars = [
    'bmw' => $bmw,
    'opel' => $opel,
    'toyota' => $toyota
];


foreach ($cars as $brand => $ss) {
    echo "Car $brand<br>" . $ss['model'] . " " . $ss['speed'] . " " . $ss['doors'] . " " . $ss['year'] . " " . "<br>";
}

//Задание #6
$result = 0;

echo "<table style=text-align:center>";

for ($a = 1; $a <= 10; $a++) {
    echo "<tr>";

    for ($b = 1; $b <= 10; $b++) {
        $result = $a * $b;

        if ($a % 2 === 0 && $b % 2 === 0) {
            echo "<td>($result)</td>";
        } elseif ($a % 2 === 1 && $b % 2 === 1) {
            echo "<td>[$result]</td>";
        } else {
            echo "<td>$result</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
