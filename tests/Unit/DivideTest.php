<?php


use App\Calculator\Divide;

it('divides numbers correctly', function () {
    $calculator = new Divide();
    $result = $calculator->compute([8, 2]);
    expect($result)->toBe(4);
});

it('throws an exception when dividing by zero', function () {
    $calculator = new Divide();
    $calculator->compute([8, 0]);
})->throws(\InvalidArgumentException::class, 'Cannot divide by zero');

it('divides a number by itself correctly', function () {
    $calculator = new Divide();
    $result = $calculator->compute([8, 8]);
    expect($result)->toBe(1);
});

it('divides a negative number correctly', function () {
    $calculator = new Divide();
    $result = $calculator->compute([-8, 2]);
    expect($result)->toBe(-4);
});
