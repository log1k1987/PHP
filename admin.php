<?php
require_once('src/init.php');

$query = "SELECT * FROM `users`";
$ret = getDbConnection()->query($query);
$AllUsers = $ret->fetchAll();

echo "Список пользователей:<br>";
echo "<ul>";

foreach ($AllUsers as $user) {
echo "<li>{$user['id']} {$user['email']} {$user['name']} {$user['phone']}</li>";
}

$query = "SELECT * FROM `orders`";
$ret = getDbConnection()->query($query);
$AllOrders = $ret->fetchAll();

echo "</ul><br>";
echo "Список Заказов:<br>";
echo "<ul>";

foreach ($AllOrders as $order) {
    echo "<li>{$order['order_id']} {$order['user_id']} {$order['address']} {$order['comment']}</li>";
}

echo "</ul><br>";
