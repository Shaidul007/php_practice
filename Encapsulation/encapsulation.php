<?php

// 1ta calss create korbho ecnapsultaion er maddome Bid name jekhane minimumAmount set kora thakbe and bitAmount name 2 ta value thakbe . condition holo minimumAmount ja set kora ache tar theke kom set korle tai bidAmount hoye jabe
class Bid{
    private $minimumAmount=5;
    private $bitAmount;

public function setBitAmount($amount){
    if($amount< $this->minimumAmount){
        $this->bitAmount=$this->minimumAmount;
        return;
    }
    $this->bitAmount=$amount;
}

public function getBitAmount(){
    return $this->bitAmount;
}

}

$bid=new Bid();
$bid->setBitAmount(4);
echo $bid->getBitAmount();

//9.11.44