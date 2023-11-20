<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMuliplication(): void
        {
            $firstValue = 2;
            $secondValue = 4;
            $expectedResult = 8;

            $calculator = new Calculator();
            $muliplication = $calculator->multiplication($firstValue, $secondValue);

            $this->assertSame($expectedResult, $muliplication,
                "La méthode multiplication() ne fonctionne plus :-("
            );
        }

    public function testModulo(): void
        {
            $value = 10;

            $calculator= new Calculator();
            $modulo = $calculator->isEven($value);

            $this->assertTrue($modulo,
                "La méthode modulo() ne fonctionne plus"
            );
        }
}