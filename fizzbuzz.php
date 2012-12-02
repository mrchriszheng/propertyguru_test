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
            echo 'FizzBuzz';
        }
        elseif ($i % 3 === 0)
        {
            echo 'Fizz';
        }
        elseif ($i % 5 === 0)
        {
            echo 'Buzz';
        }
        else
        {
            echo $i;
        }
        
        if($i != $end)
        {
            echo ', ';
        }
    }
}

?>