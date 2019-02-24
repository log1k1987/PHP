<?php
require_once('src/init.php');





//header("Status: $_POST");

if(!isUserAuthorized()) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(getEmail($email)) {
        echo 'user already exists';
        die;
    }

    $query = "INSERT INTO users (email, `name`, phone) VALUES ('$email', '$name', '$phone')";
    $ret = getDbConnection()->query($query);

    if($ret) {
        echo 'created';
    } else {
        var_dump(getDbConnection()->errorInfo());
        echo 'error'. '<br>';
    }
    die;
}

if(isUserAuthorized()) {
    die;
}
