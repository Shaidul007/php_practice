<?php

require 'checkingAccount.php';

class premiumAccount extends CheckingAccount{
    public $minimumBalance= 1000;
}


$premiumAccount= new premiumAccount() ;
echo $premiumAccount->minimumBalance. PHP_EOL;
echo $premiumAccount->deposit(20000);

// 1.7