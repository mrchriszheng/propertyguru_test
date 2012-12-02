<?php

/**
 * Ajax handling file
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 02, 2012
 */

include_once 'functions.php';

$data = $_POST;

// Validate the start and end number first
$errors = array();
if(!preg_match('/^[1-9][0-9]*$/',$data['start']))
{
    $errors[] = 'Invalid start number';
}
if(!preg_match('/^[1-9][0-9]*$/',$data['end']))
{
    $errors[] = 'Invalid end number';
}


if($data['function'] == 'fizzbuzz')
{
    
}

echo json_encode($data);
?>
