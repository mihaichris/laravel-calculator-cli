<?php

use App\Calculator\Sqrt;

it('calculates square root correctly', function () {
    $calculator = new Sqrt();
    $result = $calculator->compute([16]);
    expect($result)->toBe(4.0);
});

it('throws an exception for negative numbers', function () {
    $calculator = new Sqrt();
    $calculator->compute([-1]);
})->throws(\InvalidArgumentException::class, 'Cannot take the square root of a negative number');

it('calculates square root of zero correctly', function () {
    $calculator = new Sqrt();
    $result = $calculator->compute([0]);
    expect($result)->toBe(0.);
});
