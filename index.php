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

$tariff = new tariffBasic();
echo $tariff->theCostAtTheRateOf($data) . '<br>';

$data = [
    'distance' => 5,
    'time' => 3,
    'age' => 17,
    'gps' => rand(0, 1),
    'driver' => rand(0, 1)
];


$tariff = new tariffHourly();
echo $tariff->theCostAtTheRateOf($data) . '<br>';

$data = [
    'distance' => 5,
    'time' => 2,
    'age' => 18,
    'gps' => rand(0, 1),
    'driver' => rand(0, 1)
];


$tariff = new tariffDaily();
echo $tariff->theCostAtTheRateOf($data) . '<br>';

$data = [
    'distance' => 5,
    'time' => 2,
    'age' => 25,
    'gps' => rand(0, 1)
];


$tariff = new tariffStudents();
echo $tariff->theCostAtTheRateOf($data) . '<br>';