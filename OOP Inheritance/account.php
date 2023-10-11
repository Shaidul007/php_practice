<?php

class Account{
    public $accountNumber;
    public $balance;
    

    public function deposit($amount){
        echo "Deposit of $amount \n";
    }

    public function withdrow($amount){
        echo "Withdrawal of $amount \n";
    }

    public function getBalance(){
        return $this->balance;
    }
}