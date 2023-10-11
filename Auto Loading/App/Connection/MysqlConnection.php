<?php

namespace App\Connection;

class MysqlConnection {

    public function __construct( public string $databaseURL = 'musqul database' ) {

    }

}