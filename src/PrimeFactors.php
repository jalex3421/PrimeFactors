<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactors
{
    /* se tiene en cuenta si entra 1 ,2 ,3 y 4*/

    public function calculateOne(int $number_1_to_Factor):array
    {
        if($number_1_to_Factor==1){ return array();}
        else{return array(-1);}
    }

    public function calculateTwo(int $number_2_to_Factor):array
    {
        if($number_2_to_Factor==2){ return array(2);}
        else{return array(-1);}
    }

    public function calculateThree(int $number_3_to_Factor):array
    {
        if($number_3_to_Factor==3){ return array(3);}
        else{return array(-1);}
    }

    public function calculateFour(int $number_4_to_Factor):array
    {
        if($number_4_to_Factor==4){ return array(2);}
        else{return array(-1);}
    }

    public function convertPrime(int $number_to_be_converted):bool{
        if($number_to_be_converted ==1){return false;} //if the value is 1, its not prime
        for($i=2; $i<= intval($number_to_be_converted/2);$i++){ //other case: iterate until half
            if($number_to_be_converted%$i==0){return false;}
        }
        return true;
    }

    public function convertPrimeFactors(int $number_to_be_converted):array{
        $primefactors = array();
        for($i=1; $i<=$number_to_be_converted;$i++){
            if($number_to_be_converted%$i==0){
                if($this->convertPrime($i)){
                    array_push($primefactors,$i);
                }
            }
        }
        return $primefactors;
    }

}