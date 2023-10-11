<?php

// namespace Database\PostgreSQL;

// class Connection{
//     private string $databaseURL = 'postgre:dbpostgresql://name:3000';

//     public function getdatabaseURL(): string {
//         return $this->databaseURL . PHP_EOL;
//     }
// }


//same naem of 2 connection
namespace Database\PostgreSQL;

class Connection{
    private string $databaseURL = 'postgre:dbpostgresql://name:3000';

    public function getdatabaseURL(): string {
        return $this->databaseURL . PHP_EOL;
    }
}