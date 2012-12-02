<?php

/**
 * Fizz Buzz function
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 01, 2012
 */

fizz_buzz();

/**
 * Fizz Buzz
 * 
 * @param   int $start  The number to start from (defaults to 1).
 * @param   int $end    The number to finish with (defaults to 100).
 * @return
 * 
 */
function fizz_buzz($start = 1, $end = 100)
{
    for ($i = $start; $i <= $end; $i++)
    {
        if ($i % 3 === 0 && $i % 5 === 0)
        {
            print_pre('FizzBuzz');
        }
        elseif ($i % 3 === 0)
        {
            print_pre('Fizz');
        }
        elseif ($i % 5 === 0)
        {
            print_pre('Buzz');
        }
        else
        {
            print_pre($i);
        }
    }
}

function print_pre($array)
{
    print("<pre>");
    $output = print_r($array, true);
    print(htmlspecialchars($output));
    print("</pre>");
}

?>