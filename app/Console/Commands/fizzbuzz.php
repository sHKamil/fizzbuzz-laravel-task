<?php

namespace App\Console\Commands;

use App\Services\FizzbuzzService;
use Illuminate\Console\Command;

class fizzbuzz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fizzbuzz {number?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Without any argument, by default it displays 100 numbers and if the number can be divided by 3 it displays Fizz instead of a number, if by 5 it displays Buzz, and if by 3 and 5 it displays FizzBuzz. With argument (number) for example "php artisan fizzbuzz 7" it will check this number and return fizz, buzz, fizzbuzz or number.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $number = (int) $this->argument(key: 'number');
        $fizzBuzz = new FizzbuzzService;

        if($this->argument(key: 'number')!== null && is_numeric($this->argument(key: 'number'))){
            $this->info(string: $fizzBuzz->associateFizzBuzz($number));
        } else {
            for ($i=1; $i <= 100; $i++) { 
                $this->info(string: $fizzBuzz->associateFizzBuzz($i));
            }
        }
        return;
    }
}
