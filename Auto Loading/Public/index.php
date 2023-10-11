<?php

use App\Connection\MysqlConnection;

// use App\Connection\MysqlConnection;

// require '../App/Connection/MysqlConnection.php';

// $mysqlConnection= new MysqlConnection();

// auto loader
spl_autoload_register(function ($className) {
    $rootDirectory = dirname(__DIR__) . '/';

    $file = $rootDirectory . str_replace('\\', '/', $className) . '.php'; // Added '/' and '.php'

    if (file_exists($file)) {
        require_once $file;
    }
});

$mysqlConnection = new MysqlConnection();
echo $mysqlConnection->databaseURL;