<?php

namespace App\Calculator;

class Sqrt implements Calculator
{
    public function compute(int|float|array $computed): float
    {
        if (is_array($computed)) {
            $computed = $computed[0];
        }
        return sqrt($computed);
    }
}
