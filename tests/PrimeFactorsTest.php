<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;
//use /var/www/html/src/PrimeFactors;
use Deg540\PHPTestingBoilerplate\PrimeFactors;
use PHPUnit\Framework\TestCase;

final class PrimeFactorsTest extends TestCase{

    /**
     * @test : determina que 1 no tiene factores
     */
    public function number_1_has_no_factors(){
        $primeFactor = new PrimeFactors();
        $calculatedPrimeFactor = $primeFactor->calculate(1);
        $this->assertEmpty($calculatedPrimeFactor); //assert
    }

    //lo mismo para dos


    /**
     * @test
     */
    /*
    public function when_prime_give_true(){
        $primeFactors = new PrimeFactors();
        $convertedvalue = $primeFactors->convertPrime(4); //act
        $this->assertEquals("prime",$convertedvalue); //assert
    }
    */


}