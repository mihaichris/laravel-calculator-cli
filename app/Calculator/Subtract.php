<?php

namespace App\Calculator;

class Subtract implements Calculator
{
    /**
     * @param float[]|int[] $computed
     * @return float|int
     */
    public function compute(array $computed): float|int
    {
        $initial = array_shift($computed);
        return array_reduce($computed, function ($carry, $item) {
            return $carry - $item;
        }, $initial);
    }
}
