<?php

//echo date('l d M Y');

// echo date('h');
// echo date('i');
//echo date('s');
// echo date('a');

// echo date('h:i:sa');

date_default_timezone_set('Africa/Lagos');
// echo date('h:i:sa');

$timestamp = mktime(10, 14, 54, 9, 10, 1988);
// echo $timestamp;
// echo date('m/d/Y h:i:sa', $timestamp);

$timestamp2 = strtotime('7:00pm September 27th 2021');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
// echo $timestamp2;
echo date('m/d/Y h:i:sa', $timestamp4);