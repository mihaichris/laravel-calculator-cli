<?php

use App\Calculator\Add;
use App\Calculator\CalculatorFactory;
use App\Calculator\Divide;
use App\Calculator\Multiply;
use App\Calculator\Operation;
use App\Calculator\Sqrt;
use App\Calculator\Subtract;

it('creates addition calculator', function () {
    $operation = Operation::ADDITION;
    $calculator = CalculatorFactory::createByOperation($operation);
    expect($calculator)->toBeInstanceOf(Add::class);
});

it('creates subtraction calculator', function () {
    $operation = Operation::SUBTRACTION;
    $calculator = CalculatorFactory::createByOperation($operation);
    expect($calculator)->toBeInstanceOf(Subtract::class);
});

it('creates multiplication calculator', function () {
    $operation = Operation::MULTIPLICATION;
    $calculator = CalculatorFactory::createByOperation($operation);
    expect($calculator)->toBeInstanceOf(Multiply::class);
});

it('creates division calculator', function () {
    $operation = Operation::DIVISION;
    $calculator = CalculatorFactory::createByOperation($operation);
    expect($calculator)->toBeInstanceOf(Divide::class);
});

it('creates square root calculator', function () {
    $operation = Operation::SQUARE;
    $calculator = CalculatorFactory::createByOperation($operation);
    expect($calculator)->toBeInstanceOf(Sqrt::class);
});
