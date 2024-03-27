<?php

namespace Tests\Feature\Integration\Console\Commands;

use Tests\TestCase;

class FizzbuzzCommandTest extends TestCase
{
    /** @test */
    public function test_command_returns_string_fizz()
    {
        // Execute the command with the argument '3'
        $output = $this->artisan('fizzbuzz', ['number' => '3']);

        // Assert that the output is 'Fizz'
        $output->expectsOutput('Fizz');
    }

    /** @test */
    public function test_command_returns_string_buzz()
    {
        // Execute the command with the argument '5'
        $output = $this->artisan('fizzbuzz', ['number' => '5']);

        // Assert that the output is 'Buzz'
        $output->expectsOutput('Buzz');
    }

    /** @test */
    public function test_command_returns_string_fizzbuzz()
    {
        // Execute the command with the argument '15'
        $output = $this->artisan('fizzbuzz', ['number' => '15']);

        // Assert that the output is 'FizzBuzz'
        $output->expectsOutput('FizzBuzz');
    }

    /** @test */
    public function test_command_returns_number()
    {
        // Execute the command with the argument '15'
        $output = $this->artisan('fizzbuzz', ['number' => '2']);

        // Assert that the output is 'FizzBuzz'
        $output->expectsOutput(2);
    }
}
