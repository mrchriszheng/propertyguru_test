<?php

/**
 * Ajax handling file
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 02, 2012
 */

include_once 'functions.php';

$data = $_POST;

echo json_encode($data);
?>
