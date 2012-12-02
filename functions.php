<?php

/**
 * Fizz Buzz & Fizz Buzz Bazz
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 01, 2012
 */

/**
 * Fizz Buzz
 * 
 * @param   int     $start  The number to start from (defaults to 1).
 * @param   int     $end    The number to finish with (defaults to 100).
 * @return  string $result  The string with the fizz, buzz and the numbers.
 * 
 */
function fizz_buzz($start = 1, $end = 100)
{
    $result = '';
    for ($i = $start; $i <= $end; $i++)
    {
        if ($i % 3 === 0 && $i % 5 === 0)
        {
            $result .= 'FizzBuzz';
        }
        elseif ($i % 3 === 0)
        {
            $result .= 'Fizz';
        }
        elseif ($i % 5 === 0)
        {
            $result .= 'Buzz';
        }
        else
        {
            $result .= $i;
        }
        
        if($i != $end)
        {
            $result .= ', ';
        }
    }
    return $result;
}

/**
 * Fizz Buzz Bazz
 * 
 * @param   int     $start   The number to start from (defaults to 1).
 * @param   int     $end     The number to finish with (defaults to 100).
 * @return  string  $result  The string with the fizz, buzz, bazz and the numbers.
 *      
 */
function fizz_buzz_bazz($start = 1, $end = 100)
{
    $result = '';
    $fb_count = 0;
    for ($i = $start; $i <= $end; $i++)
    {
        if ($i % 15 === 0)
        {
            $result .= 'FizzBuzz';
        }
        elseif ($i % 3 === 0)
        {
            $result .= 'Fizz';
            $fb_count++;
        }
        elseif ($i % 5 === 0)
        {
            $result .= 'Buzz';
            $fb_count++;
        }
        else
        {
            if ($fb_count > 1)
            {
                $result .= 'Bazz';
                $fb_count = 0;
            }
            else
            {
                $result .= $i;
            }
        }
        
        if($i != $end)
        {
            $result .= ', ';
        }
    }
    return $result;
}

?>