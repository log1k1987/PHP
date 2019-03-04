<?php
require_once 'srcc/init.php';
require_once 'vendor/autoload.php';
require_once 'view.php';

use dz5\view;

$query = "SELECT * FROM `users`";
$ret = getDbConnection()->query($query);
$AllUsers = $ret->fetchAll();
$data = [];
$data1 = [];
$data2 = [];

foreach ($AllUsers as $user) {
    array_push($data, "{$user['id']} {$user['email']} {$user['name']} {$user['phone']}");
}


$query = "SELECT * FROM `orders`";
$ret = getDbConnection()->query($query);
$AllOrders = $ret->fetchAll();


foreach ($AllOrders as $order) {
    array_push($data1, "{$order['order_id']} {$order['user_id']} {$order['address']} {$order['comment']}");
}

$data2 += ['users' => $data];
$data2 += ['orders' => $data1];

$view = new view();
echo $view->render('admin', $data2);


