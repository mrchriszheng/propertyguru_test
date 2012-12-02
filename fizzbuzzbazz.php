<?php

/**
 * Fizz Buzz Bazz function
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 01, 2012
 */

fizz_buzz_bazz();

/**
 * Fizz Buzz Bazz
 * 
 * @param   int $start  The number to start from (defaults to 1).
 * @param   int $end    The number to finish with (defaults to 100).
 *      
 */
function fizz_buzz_bazz($start = 1, $end = 100)
{
    $fb_count = 0;
    for ($i = $start; $i <= $end; $i++)
    {
        if ($i % 15 === 0)
        {
            echo 'FizzBuzz';
            $fb_count = 0;
        }
        elseif ($i % 3 === 0)
        {
            echo 'Fizz';
            $fb_count++;
        }
        elseif ($i % 5 === 0)
        {
            echo 'Buzz';
            $fb_count++;
        }
        else
        {
            if ($fb_count > 1)
            {
                echo 'Bazz';
                $fb_count = 0;
            }
            else
            {
                echo $i;
            }
        }
        
        if($i != $end)
        {
            echo ', ';
        }
    }
}

?>