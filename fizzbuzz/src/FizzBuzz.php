<?php


namespace Deg540\PHPTestingBoilerplate;


class FizzBuzz
{
    /**
     * después de implementar test, se ha de refactorizar la solucion planteada
     * IR A POR CODIGO TIPADO!! --> declare strict types
     */

    //CONSTRUCTOR: FUNCION INICIALIZADORA!!
    public function generate(int $number_to_be_converted):string{

    }

    public function convertFizzBase(int $number_to_be_converted):string{
        if($number_to_be_converted==3){return "fizz";}
        else{
            return "No fizz";
        }
    }

    public function convertBuzzBase(int $number_to_be_converted):string{
        if($number_to_be_converted==5){return "buzz";}
        else{
            return "No buzz";
        }
    }

    public function convertFizzbuzzBase(int $number_to_be_converted):string{
        if($number_to_be_converted==15){return "fizbuzz";}
        else{
            return "No fizbuzz";
        }
    }

    public function convertFizz(int $number_to_be_converted):string{
        if($number_to_be_converted%3==0){return "fizz";}
        else{
            return "No fizz";
        }
    }

    public function convertBuzz(int $number_to_be_converted):string{
        if($number_to_be_converted%5==0){return "buzz";}
        else{
            return "No buzz";
        }
    }

    public function convertFizzbuzz(int $number_to_be_converted):string{
        if($number_to_be_converted%3==0 and $number_to_be_converted%5==0){return "fizbuzz";}
        else{
            return "No fizbuzz";
        }
    }
}