<?php

session_start();

require('functions.php');

function getDbConnection()
{
    static $DB;
    if(!$DB) {
        try {
            $DB = new PDO("mysql:host=localhost;dbname=burgers", 'root', '');
        } catch (Exception $e) {
            echo $e;
            echo $e->getMessage();
            die();
        }
    }
    return $DB;
}

