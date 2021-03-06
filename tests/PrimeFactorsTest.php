<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;
use Deg540\PHPTestingBoilerplate\PrimeFactors;
use PHPUnit\Framework\TestCase;

final class PrimeFactorsTest extends TestCase{

    /**
     * @test : determina que 1 no tiene factores
     */
    public function number_1_has_no_factors(){
        $primeFactor = new PrimeFactors();
        $calculatedPrimeFactor = $primeFactor->calculateOne(1);
        $this->assertEmpty($calculatedPrimeFactor); //assert
    }

    /**
     * @test : determina que 2 tiene un unico factor
     */
    public function number_2_has_one_factor(){
        $primeFactor = new PrimeFactors();
        $calculatedPrimeFactor = $primeFactor->calculateTwo(2);
        $this->assertEquals(array(2),$calculatedPrimeFactor);
    }

    /**
     * @test : determina que 3 tiene un unico factor
     */
    public function number_3_has_one_factor(){
        $primeFactor = new PrimeFactors();
        $calculatedPrimeFactor = $primeFactor->calculateThree(3);
        $this->assertEquals(array(3),$calculatedPrimeFactor);
    }

    /**
     * @test : determina que 4 tiene un unico factor
     */
    public function number_4_has_one_factor(){
        $primeFactor = new PrimeFactors();
        $calculatedPrimeFactor = $primeFactor->calculateFour(4);
        $this->assertEquals(array(2),$calculatedPrimeFactor);
    }

    /**
     * @test : determina si un valor es primo o no
     */
    public function when_prime_give_true(){
        $primeFactors = new PrimeFactors();
        $convertedvalue = $primeFactors->convertPrime(11);
        $this->assertEquals(true,$convertedvalue); //assert
    }

    /**
     * @test : devuelve lista con factores primos
     */
    public function prime_factors(){
        $primeFactors = new PrimeFactors();
        $convertedvalue = $primeFactors->convertPrimeFactors(186);
        print_r($convertedvalue);
        $this->assertNotEmpty($convertedvalue); //assert
    }

}