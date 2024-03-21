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
    protected $signature = 'app:fizzbuzz {number?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'By default without any argument displays 100 with fizz, buzz or fizzbuzz. With number for example "php artisan app:fizzbuzz 7" it will check this number seven and return fizz, buzz or fizzbuzz.';

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
