<?php

namespace App\Calculator;

interface Calculator
{
    /**
     * @param float[]|int[] $computed
     * @return float|int
     */
    public function compute(array $computed): float|int;
}
