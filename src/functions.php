<?php
function isUserAuthorized()
{
    return isset($_SESSION['user_id']);
}

function getEmail(string $login): array
{
    $query = "SELECT * FROM users WHERE email = '$login'";
    $ret = getDbConnection()->query($query);
    $users = $ret->fetchAll();
    return $users[0] ?? [];
}