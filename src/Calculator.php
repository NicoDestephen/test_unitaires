<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $firstValue, int $secondValue): int
    {
        return $firstValue * $secondValue;
    }

    public function isEven(int $value): true|false
    {
        if($value % 2 == 0){ 
            return true;  
        } 
        else{ 
            return false; 
        } 
    }
}