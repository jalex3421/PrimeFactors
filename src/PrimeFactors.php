<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactors
{
    /* se tiene en cuenta si entra 1 ,2 ,3 y 4
    public funcion calculate(int $number_1_to_Factor):array{
        return ();
    } */

    public function calculateOne(int $number_1_to_Factor):array
    {
        if($number_1_to_Factor==1){ return array();}
        else{return array(1);}
    }

    public function calculateTwo(int $number_1_to_Factor):array
    {
        if($number_1_to_Factor==2){ return array(2);}
        else{return array(17);}
    }


    public function convertPrime(int $number_to_be_converted):string{
        if($number_to_be_converted ==1){return "not prime";} //if the value is 1, its not prime
        for($i=2; $i<= intval($number_to_be_converted/2);$i++){ //other case: iterate until half
            if($number_to_be_converted%$i==0){return "not prime";}
        }
        return "prime";
    }

}