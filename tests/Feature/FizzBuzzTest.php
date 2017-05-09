<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_translate_1_for_fizzbuzz()
    {
        $response = $this->call('GET', 'execute/1');

        $response->assertSee('1');
    }

    /** @test */
    public function it_translate_3_for_fizzbuzz()
    {
        $response = $this->call('GET', 'execute/3');

        $response->assertSee('Fizz');
    }

    /** @test */
    public function it_translate_5_for_fizzbuzz()
    {
        $response = $this->call('GET', 'execute/5');

        $response->assertSee('Buzz');
    }

    /** @test */
    public function it_translate_14_for_fizzbuzz()
    {
        $response = $this->call('GET', 'execute/14');

        $response->assertDontSee('FizzBuzz');
    }

    /** @test */
    public function it_translate_15_for_fizzbuzz()
    {
        $response = $this->call('GET', 'execute/15');

        $response->assertSee('FizzBuzz');
    }

    /** @test */
    public function it_translate_a_sequence_of_number_for_fizzbuzz()
    {
        $response = $this->call('GET', 'executeUpTo/15');

        $response->assertJson([1,2,'Fizz',4,'Buzz','Fizz',7,8,'Fizz','Buzz',11,'Fizz',13,14,'FizzBuzz']);
    }
}
