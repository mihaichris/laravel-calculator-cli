<?php

namespace App\Calculator;

class Divide implements Calculator
{
    /**
     * @param float[]|int[] $computed
     * @return float|int
     */
    public function compute(array $computed): float|int
    {
        return array_reduce(array_slice($computed, 1), function ($carry, $item) {
            return $carry / $item;
        }, $computed[0]);
    }
}
