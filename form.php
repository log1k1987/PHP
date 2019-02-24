<?php
require_once('src/init.php');

if(isUserAuthorized()) {
    echo 'you are already authorized';
    die;
}

if(!isUserAuthorized()) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user = getEmail($email);

    if($user) {
        echo 'user already exists'.'<br>';

        $_SESSION['user_id'] = $user['id'];

        echo 'Authorized end';
        die;
    }

    $query = "INSERT INTO users (email, `name`, phone) VALUES ('$email', '$name', '$phone')";
    $ret = getDbConnection()->query($query);

    if($ret) {
        echo 'User created';
    } else {
        var_dump(getDbConnection()->errorInfo());
        echo 'error'. '<br>';
    }
}


