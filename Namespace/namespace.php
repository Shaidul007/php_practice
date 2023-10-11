<?php

// use Database\MySQL\connection;


// require 'Database/MySQL/connection.php';
// require 'Database/PostgreSQL/connection.php';

// // $mySQLconnection= new \Database\MySQL\connection();//ami chaile ayibabe o url ta bole dite pari
// $mySQLconnection= new connection();//cahile ayibabe url na bole import class kore dite pari taile use diye link ta chole asbhe

// echo $mySQLconnection->getdatabaseURL();

// $myPostgreConnection= new \Database\PostgreSQL\Connection();

// echo $myPostgreConnection->getdatabaseURL();


//je kono connection er nam 2ta jodi same hoy taile nicher ayi babe code likthe hobe

use Database\MySQL\Connection as MySQL;
use Database\PostgreSQL\Connection as PostgreSQL;

require 'Database/MySQL/Connection.php';
require 'Database/PostgreSQL/Connection.php';




$mySQLconnection= new MySQL();

echo $mySQLconnection->getdatabaseURL();

$myPostgreConnection= new PostgreSQL();

echo $myPostgreConnection->getdatabaseURL();


//7.44
