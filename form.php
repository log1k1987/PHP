<?php
require_once('src/init.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$street = $_POST['street'];
$home = $_POST['home'];
$part = $_POST['part'];
$appt = $_POST['appt'];
$floor = $_POST['floor'];
$comment = $_POST['comment'];
$address = "$street $home $floor $part $appt";
$user = getEmail($email);

if (!isUserAuthorized()) {

    if ($user) {
        echo 'user already exists' . '<br>';
    } else {
        $query = "INSERT INTO users (email, `name`, phone) VALUES ('$email', '$name', '$phone')";
        $ret = getDbConnection()->query($query);

        if ($ret) {
            echo 'User created' . '<br>';
        } else {
            var_dump(getDbConnection()->errorInfo());
            echo 'error' . '<br>';
        }

        $user = getEmail($email);
    }

    $_SESSION['user_id'] = $user['id'];
    echo 'Authorized end' . '<br>';
}

echo 'you are already authorized' . '<br>';

$query = "INSERT INTO orders (`user_id`, `address`, `comment`) VALUES ('{$user['id']}', '$address', '$comment')";
$ret = getDbConnection()->query($query);
$lastOrderId = getDbConnection()->lastInsertId();
echo $lastOrderId . '<br>';

if ($ret) {
    echo 'Order created' . '<br>';
} else {
    var_dump(getDbConnection()->errorInfo());
    echo 'error' . '<br>';
}

$query = "SELECT count(*) FROM `orders` WHERE user_id= {$user['id']}";
$ret = getDbConnection()->query($query);
$ordersLength = $ret->fetchColumn();

if ($ordersLength > 1) {
    $byeMessage = "Спасибо! Это уже $ordersLength-й заказ";
} else {
    $byeMessage = 'Спасибо - это ваш первый заказ';
}

$message = "Ваш заказ будет доставлен по адресу: $address\r\n
            - DarkBeefBurger за 500 рублей, 1 шт\r\n
            $byeMessage";

$message = wordwrap($message, 150, "\r\n");
$sendMail = mail($email, "Заказ №{$lastOrderId}", $message);

if (!$sendMail) {
    echo $errorMessage = error_get_last()['message'];
}