<?php

class Attedanceee {
    private static int $count = 0;

    public function __construct() {
        self::$count++;
    }
    public static function getCount() {
        return self::$count;
    }
}
$attendanceObj= new Attedanceee();
$attendanceObj= new Attedanceee();
$attendanceObj= new Attedanceee();
print_r(Attedanceee::getCount());