<?php

use App\Calculator\Operation;

use function Pest\Laravel\artisan;


it('computes the result for addition with no numbers', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'addition', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('No params used.');
});

it('computes the result for division with no numbers', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'division', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('No params used.');
});

it('computes the result for multiplication with no numbers', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'multiplication', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('No params used.');
});

it('computes the result for subtract with no numbers', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'subtract', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('No params used.');
});

it('computes the result for addition with one param', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'addition', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '1')
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('Result is: 1');
});

it('computes the result for addition with two param', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'addition', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '1')
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '1')
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('Result is: 2');
});

it('computes the result for subtract with two param', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'subtraction', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '2')
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '1')
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('Result is: 1');
});

it('computes the result for division with two param', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'division', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '10')
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '5')
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('Result is: 2');
});

it('computes the result for sqrt with two param', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'square', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '10')
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('Result is: 3.1622776601684');
});

it('computes the result for multiply with two param', function () {
    artisan('calculator:compute')
        ->expectsChoice('What operation to perform?', 'multiplication', array_column(Operation::cases(), 'value'))
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '10')
        ->expectsConfirmation('Do you want to add number?', 'yes')
        ->expectsQuestion('Add number', '5')
        ->expectsConfirmation('Do you want to add number?')
        ->expectsOutputToContain('Result is: 50');
});
