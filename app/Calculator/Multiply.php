<?php

namespace App\Calculator;

class Multiply implements Calculator
{
    /**
     * @param float[]|int[] $computed
     */
    public function compute(array $computed): int
    {
        return array_reduce($computed, function ($carry, $item) {
            return $carry * $item;
        }, 1);
    }
}
