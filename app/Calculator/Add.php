<?php

namespace App\Calculator;

class Add implements Calculator
{
    /**
     * @param float[]|int[] $computed
     * @return float|int
     */
    public function compute(array $computed): float|int
    {
        return array_sum($computed);
    }
}
