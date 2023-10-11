<?php

$num        = 5;
$percentage = 10;

 class normalCalcultor {

   final public function calcultorParcentage( $num, $percentage ) {
        return ( $num / $percentage ) * 100;
    }
}


// final korle r oi class ke edit kora jabena 
// class FinancialCalculator extends normalCalcultor {
//     public function calcultorParcentage($num, $percentage)
//     {
//         return  $num / ($percentage  * 100);
//     }
// }

$normalCalcultor = new normalCalcultor();
echo $normalCalcultor->calcultorParcentage( $num, $percentage );

// $financialCalculator = new FinancialCalculator();
// echo $financialCalculator->calcultorParcentage( $num, $percentage );


// 1.7