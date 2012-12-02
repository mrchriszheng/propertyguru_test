<?php

/**
 * Ajax handling file
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 02, 2012
 */

$data = $_POST;

// Validate the start and end number first
$error = '';
// Validate if the input is integer
if(!preg_match('/^[1-9][0-9]*$/', $data['start']) || !preg_match('/^[1-9][0-9]*$/', $data['end']))
{
    $error = 'Invalid start or end number, only positive integers are accepted.';
}
else
{
    // Validate if the start number is less than end number
    if($data['start'] >= $data['end'])
    {
        $error = "Start number is larger than end number, please correct.";
    }
}

$result = array();
// send the error response if validation fails, send the output otherwise
if($error != '')
{
    $result['validation'] = '0';
    $result['error'] = $error;
}
else
{
    $result['validation'] = '1';
    
    require_once 'functions.php';
    $start = intval($data['start']);
    $end = intval($data['end']);
    if($data['function'] == 'fizzbuzz')
    {
        $result['fizzbuzz'] = fizz_buzz($start, $end);
    }
    else
    {
        $result['fizzbuzz'] = fizz_buzz_bazz($start, $end);
    }
}

echo json_encode($result);
?>
