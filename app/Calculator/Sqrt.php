<?php

namespace App\Calculator;

use InvalidArgumentException;

class Sqrt implements Calculator
{
    public function compute(int|float|array $computed): float
    {
        if (is_array($computed)) {
            $computed = $computed[0];
        }
        if ($computed < 0) {
            throw new InvalidArgumentException('Cannot take the square root of a negative number');
        }
        return sqrt($computed);
    }
}
