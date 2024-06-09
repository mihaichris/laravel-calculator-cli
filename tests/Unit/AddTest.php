<?php

use App\Calculator\Add;

test('compute with one number result the same number', function () {
    $add = new Add();
    expect($add->compute([1]))->toBe(1);
});

test('compute with one number lower 0 result the same number', function () {
    $add = new Add();
    expect($add->compute([-1]))->toBe(-1);
});

test('compute with one numerical result the same number', function () {
    $add = new Add();
    expect($add->compute(['1']))->toBe(1);
});

test('compute with one numerical lower 0 result the same number', function () {
    $add = new Add();
    expect($add->compute(['-1']))->toBe(-1);
});

test('compute with two numerical lower 0 result the sum', function () {
    $add = new Add();
    expect($add->compute(['-1', '-2']))->toBe(-3);
});
