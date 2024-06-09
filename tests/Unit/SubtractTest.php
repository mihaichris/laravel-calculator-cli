<?php

use App\Calculator\Subtract;

test('subtract two numbers', function () {
    $subtract = new Subtract();
    expect($subtract->compute([5, 2]))->toBe(3);
});

test('subtract two numerical', function () {
    $subtract = new Subtract();
    expect($subtract->compute(['5', '2']))->toBe(3);
});

test('subtract two numerical lower than 0', function () {
    $subtract = new Subtract();
    expect($subtract->compute(['-5', '-2']))->toBe(-3);
});

it('subtracts numbers correctly', function () {
    $calculator = new Subtract();
    $result = $calculator->compute([5, 2]);
    expect($result)->toBe(3);
});

it('subtracts multiple numbers correctly', function () {
    $calculator = new Subtract();
    $result = $calculator->compute([10, 2, 3]);
    expect($result)->toBe(5);
});

it('subtracts negative numbers correctly', function () {
    $calculator = new Subtract();
    $result = $calculator->compute([-5, -3]);
    expect($result)->toBe(-2);
});

it('subtracts negative number from positive number correctly', function () {
    $calculator = new Subtract();
    $result = $calculator->compute([5, -3]);
    expect($result)->toBe(8);
});

it('subtracts zero correctly', function () {
    $calculator = new Subtract();
    $result = $calculator->compute([5, 0]);
    expect($result)->toBe(5);
});
