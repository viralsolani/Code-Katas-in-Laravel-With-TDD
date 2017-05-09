<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{

    /**
     * Execute up to given number
     *
     * @param  $number
     * @return String
     */
    public function execute($number)
    {
        if($number % 15 == 0) return 'FizzBuzz';
        if($number % 3 == 0) return 'Fizz';
        if($number % 5 == 0) return 'Buzz';

        return $number;
    }

    /**
     * Execute up to given number in loop
     *
     * @param  $number
     * @return Array
     */
    public function executeUpTo($number)
    {
        $output = [];
        foreach (range(1, $number) as $i)
        {
            $output[] = $this->execute($i);
        }

        return $output;
    }

}