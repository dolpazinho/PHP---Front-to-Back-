<?php

//Indexed Arrays

$people = array('Kanmi', 'Ade', 'Dolpaz');
$ids = array(23, 65, 90, 33);
$cars = ['Honda', 'Benz', 'Toyota', 'VW'];
$cars[4] = 'Chevy';
$cars[] = 'Bmw';

// echo $people[2];
// echo $ids[2];
// echo $cars[5];

// echo count($people);
// echo print_r($cars);
// echo var_dump($people);

//Associative Array

$people2 = array('Adeniji' => 35, 'Abosede' => 29, 'Adda' => 40);
// echo $people2['Adeniji'];
$ids2 = [22 => 'Olasunkanmi', 33 => 'Abosede', 60 => 'Abiodun'];
// echo $ids2[33];

$people3['Dolpaz'] = 42;
// echo $people3['Dolpaz'];
// print_r($people3);
// var_dump($people3);

// Multi dimensional Array

$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 53, 45),
);

echo $cars[2][2];