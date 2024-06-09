<?php

use App\Calculator\Multiply;

it('multiplies numbers correctly', function () {
    $calculator = new Multiply();
    $result = $calculator->compute([2, 3, 4]);
    expect($result)->toBe(24);
});
