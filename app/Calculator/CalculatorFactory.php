<?php

namespace App\Calculator;

class CalculatorFactory
{
    public static function createByOperation(Operation $operation): Calculator
    {
        return match ($operation) {
            Operation::ADDITION => new Add(),
            Operation::SUBTRACTION => new Subtract(),
            Operation::MULTIPLICATION => new Multiply(),
            Operation::DIVISION => new Divide(),
            Operation::SQUARE => new Sqrt(),
        };
    }
}
