<?php

namespace App\Console\Commands;

use App\Calculator\CalculatorFactory;
use App\Calculator\Operation;
use Illuminate\Console\Command;

use function Laravel\Prompts\select;
use function Laravel\Prompts\text;
use function Laravel\Prompts\info;

class CalculatorCommand extends Command
{
    public function __construct(private readonly CalculatorFactory $calculatorFactory)
    {
        parent::__construct();
    }

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
        $computedParams = [];
        $operationChoose = select('What operation to perform?', array_column(Operation::cases(), 'value'));
        $operation = Operation::tryFrom($operationChoose);
        $computedParams[] = text('First number', required: true, validate: ['name' => 'numeric']);
        if (false === $operation->isSquare()) {
            $computedParams[] = text('Second number', required: true, validate: ['name' => 'numeric']);
        }
        $calculator = $this->calculatorFactory->createByOperation($operation);
        $computeResult = $calculator->compute($computedParams);
        info('Result is: ' . $computeResult);
    }
}
