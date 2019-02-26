<?php
require_once 'interfaceTariff.php';
require_once 'traitAdditionalServices.php';
require_once 'AbstractTariff.php';
require_once 'tariffBasic.php';
require_once 'tariffHourly.php';
require_once 'tariffDaily.php';
require_once 'tariffStudents.php';

$data = [
    'distance' => 5,
    'time' => 60,
    'age' => 18,
    'gps' => rand(0, 1)
];

$tariff = new tariffBasic($data);
echo $tariff->theCostAtTheRateOf() . '<br>';

$data = [
    'distance' => 5,
    'time' => 3,
    'age' => 17,
    'gps' => rand(0, 1),
    'driver' => rand(1, 1)
];


$tariff = new tariffHourly($data);
echo $tariff->theCostAtTheRateOf() . '<br>';

$data = [
    'distance' => 5,
    'time' => 1,
    'age' => 18,
    'gps' => rand(0, 1),
    'driver' => rand(0, 1)
];


$tariff = new tariffDaily($data);
echo $tariff->theCostAtTheRateOf() . '<br>';

$data = [
    'distance' => 5,
    'time' => 2,
    'age' => 23,
    'gps' => rand(0, 1)
];


$tariff = new tariffStudents($data);
echo $tariff->theCostAtTheRateOf() . '<br>';