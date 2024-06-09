<?php

namespace App\Calculator;

use InvalidArgumentException;

class Divide implements Calculator
{
    /**
     * @param float[]|int[] $computed
     * @return float|int
     */
    public function compute(array $computed): float|int
    {
        return array_reduce(array_slice($computed, 1), function ($carry, $item) {
            if ($item == 0) {
                throw new InvalidArgumentException('Cannot divide by zero');
            }
            return $carry / $item;
        }, $computed[0]);
    }
}
