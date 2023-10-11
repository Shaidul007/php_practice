<?php

require 'account.php';

class CheckingAccount extends Account {
    public function transfer( $amount ) {
        echo "Transfer of $amount \n";
    }
}

$checkingAccount = new CheckingAccount();
$checkingAccount->deposit( 100 );
$checkingAccount->withdrow( 50 );
$checkingAccount->transfer( 50 );