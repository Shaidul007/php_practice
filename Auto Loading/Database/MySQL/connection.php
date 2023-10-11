<?php


// namespace Database\MySQL;

// class connection {
//     private string $databaseURL = 'mysql:dbname:3000';

//     public function getdatabaseURL(): string {
//         return $this->databaseURL . PHP_EOL;
//     }
// }

//same name of 2 connection

namespace Database\MySQL;

class Connection {
    private string $databaseURL = 'mysql:dbname:3000';

    public function getdatabaseURL(): string {
        return $this->databaseURL . PHP_EOL;
    }
}