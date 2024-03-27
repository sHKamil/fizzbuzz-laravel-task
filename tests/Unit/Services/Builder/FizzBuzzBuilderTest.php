<?php

namespace Tests\Unit\Services\Builder;

use App\Services\FizzbuzzBuilder\FizzBuzzBuilder;
use App\Services\FizzbuzzBuilder\FizzbuzzBuzzHandler;
use App\Services\FizzbuzzBuilder\FizzbuzzEmptyHandler;
use App\Services\FizzbuzzBuilder\FizzbuzzFizzHandler;
use Tests\TestCase;


class FizzBuzzBuilderTest extends TestCase
{
    /** @test */
    public function it_builds_fizzbuzz_with_number_for_number()
    {
        $builder = new FizzBuzzBuilder();

        $builder
            ->add(new FizzbuzzFizzHandler())
            ->add(new FizzbuzzBuzzHandler())
            ->add(new FizzbuzzEmptyHandler());

        $result = $builder->produce(2);
        $expectedResult = 2;

        $this->assertEquals($expectedResult, $result);
    }

    /** @test */
    public function it_builds_fizzbuzz_with_number_for_fizz()
    {
        $builder = new FizzBuzzBuilder();

        $builder
            ->add(new FizzbuzzFizzHandler())
            ->add(new FizzbuzzBuzzHandler())
            ->add(new FizzbuzzEmptyHandler());

        $result = $builder->produce(3);
        $expectedResult = 'Fizz';

        $this->assertEquals($expectedResult, $result);
    }

    /** @test */
    public function it_builds_fizzbuzz_with_number_for_buzz()
    {
        $builder = new FizzBuzzBuilder();

        $builder
            ->add(new FizzbuzzFizzHandler())
            ->add(new FizzbuzzBuzzHandler())
            ->add(new FizzbuzzEmptyHandler());

        $result = $builder->produce(5);
        $expectedResult = 'Buzz';

        $this->assertEquals($expectedResult, $result);
    }

    /** @test */
    public function it_builds_fizzbuzz_with_number_for_fizzbuzz()
    {
        $builder = new FizzBuzzBuilder();

        $builder
            ->add(new FizzbuzzFizzHandler())
            ->add(new FizzbuzzBuzzHandler())
            ->add(new FizzbuzzEmptyHandler());

        $result = $builder->produce(15);
        $expectedResult = 'FizzBuzz';

        $this->assertEquals($expectedResult, $result);
    }
}
