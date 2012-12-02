<?php

/**
 * Ajax handling file
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 02, 2012
 */

$data = $_POST;

// Validate the start and end number first
$errors = array();
// Validate if the input is integer
if(!preg_match('/^[1-9][0-9]*$/',$data['start']) || !preg_match('/^[1-9][0-9]*$/',$data['end']))
{
    $errors[] = 'Invalid start/end number';
}
else
{
    // Validate if the start number is less than end number
    if(strcmp($data['start'], $data['end']) >= 0)
    {
        $errors[] = "Start number is larger than end number, please correct.";
    }
}

$result = array();
// send the error response if validation fails, send the output otherwise
if(!empty($errors))
{
    $result['validation'] = 'fail';
    $result['errors'] = $errors;
}
else
{
    $result['validation'] = 'success';
    
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
