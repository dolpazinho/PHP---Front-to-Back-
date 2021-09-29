<?php

function sayFunction(){
    echo "Hello World";
}
// sayFunction();
function sayHello($name = 'Dolapo'){
    echo "Hello $name <br>";
}
// sayHello();
// sayHello('Sunkanmi');

function addNumber($num1, $num2) {
    return $num1 + $num2;
}
// echo addNumber(4, 9);

//Passing arguments by reference

$myNum = 10;

function addFive($num){
    $num +=5;
}

function addTen(&$num){
    $num +=10;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";
