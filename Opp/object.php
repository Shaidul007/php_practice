<?php

// object create
/*
class User{
public $name;
public $username;
public $followecount;

}

$userObj= new User();
$userObj->name="John";
$userObj->username="@john";
$userObj->followecount=1000;
print_r($userObj);
 */

// object method/function

// class Cart{
//     public $totalItem;
//     public $shippingCost;
//     public $tax;
//     public $discount;

//     public function calculate(){
//         $calculateTax = $this->totalItem * $this->tax;
//         $userTotal= $this->totalItem + $this->shippingCost + $calculateTax - $this->discount;
//         return $userTotal;
//     }

// }

// $cartObj= new Cart();
// $cartObj->totalItem = 100;
// $cartObj->shippingCost = 50;
// $cartObj->tax = 0.05;
// $cartObj->discount = 10;

// $subTottal= $cartObj->calculate();
// // print_r($cartObj);
// echo "subTotal: " . $subTottal;

// class Cart {
//     public $totalItem;
//     public $shippingCost;
//     public $tax;
//     public $discount;

//     public function calculate() {
//         $calculateTax = $this->totalItem +$this->shippingCost * $this->tax;
//         $userTotal = $this->totalItem + $this->shippingCost + $calculateTax - $this->discount;
//         return $userTotal;
//     }
// }

// $cartObj = new Cart();
// $cartObj->totalItem = 100;
// $cartObj->shippingCost = 50;
// $cartObj->tax = 0.05;
// $cartObj->discount = 10;

// $subTotal = $cartObj->calculate();
// echo "subTotal: " . $subTotal;

//compostion holo kono classer object ke onnno classe push korake bhuzay

// Ex:

class Song {
    public $songId;
    public $songTitle;

}

$numb            = new Song();
$numb->songId    = 1;
$numb->songTitle = "song title";

print_r( $numb );

class Playlist {
    public $playlistName;
    public $song = [];

    public function addSong( $addedSong ) {
        $this->song[] = $addedSong;
    }
}

$rockPlaylist               = new Playlist();
$rockPlaylist->playlistName = "rock";
$rockPlaylist->addSong( $numb );

print_r( $rockPlaylist );

