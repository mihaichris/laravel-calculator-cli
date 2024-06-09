<?php

namespace App\Calculator;

enum Operation: string
{
    case ADDITION = 'addition';
    case SUBTRACTION = 'subtraction';
    case MULTIPLICATION = 'multiplication';
    case DIVISION = 'division';
    case SQUARE = 'square';

    public function isSquare(): bool
    {
        return $this->value === 'square';
    }
}
