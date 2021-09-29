<?php

/*
$num = 6;

if ($num == 5){
    echo '5  was passed';
} else{
    echo 'Did not pass';
}



$num = 2;
if ($num > 4 OR $num < 10){
        echo "$num Passed";
}

*/

$favColor = 'blue';

switch ($favColor){
    case 'red':
        echo 'Your favourite color is Red';
        break;
    case 'blue':
        echo 'Your favourite color is Blue';
        break;
    case 'green':
        echo 'Your favourite color is Green';
        break;
    default:
        echo 'Your have selected an unknown color';
}