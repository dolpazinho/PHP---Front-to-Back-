<?php

$people[] = "Steve";
$people[] = "Olasunkanmi";
$people[] = "dolpaz";
$people[] = "Abosede";
$people[] = "Oladejo";
$people[] = "Kuwait";
$people[] = "Milan";
$people[] = "Germany";
$people[] = "Oberhausen";
$people[] = "Nigeria";
$people[] = "Baller";
$people[] = "Crude";
$people[] = "Mike";
$people[] = "Brad";
$people[] = "Mary";
$people[] = "Daniel";

$q = $_REQUEST['q'];
$suggestion = "";

if ($q !== " "){
    $q = strtolower($q);
    $len = strlen($q);

    foreach ($people as $person){
        if (stristr($q, substr($person, 0, $len))){
            if ($suggestion === " "){
                $suggestion = $person;
            } else{
                $suggestion .= ", $person";
            }
        }
    }
}
echo $suggestion === " " ? "No Suggestion"  : $suggestion;