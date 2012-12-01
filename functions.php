<?php

/**
 * Fizz Buzz function
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 01, 2012
 */

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
            print_pre('FizzBuzz');
        }
        elseif ($i % 3 === 0)
        {
            print_pre('Fizz');
            $fb_count++;
        }
        elseif ($i % 5 === 0)
        {
            print_pre('Buzz');
            $fb_count++;
        }
        else
        {
            if ($fb_count > 1)
            {
                print_pre('Bazz');
                $fb_count = 0;
            }
            else
            {
                print_pre($i);
            }
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