<?php

namespace App\Console\Commands;

use App\Calculator\CalculatorFactory;
use App\Calculator\Operation;
use Illuminate\Console\Command;

use InvalidArgumentException;

use function Laravel\Prompts\confirm;
use function Laravel\Prompts\error;
use function Laravel\Prompts\select;
use function Laravel\Prompts\text;
use function Laravel\Prompts\info;

class CalculatorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculator:compute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculator';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $operationChoose = select('What operation to perform?', array_column(Operation::cases(), 'value'));
        $operation = Operation::tryFrom($operationChoose);
        $computedParams = [];
        while(confirm('Do you want to add number?')) {
            $computedParams[] = text('Add number', required: true, validate: ['name' => 'numeric']);
        }
        if (empty($computedParams)) {
            info('No params used.');
            return 0;
        }
        $calculator = CalculatorFactory::createByOperation($operation);
        try {
            $computeResult = $calculator->compute($computedParams);
            info('Result is: ' . $computeResult);
        } catch (InvalidArgumentException $exception) {

            error($exception->getMessage());
        }
    }
}
