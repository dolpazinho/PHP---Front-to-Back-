<?php
/*
 *
 * For Loop
 * While Loop
 * Do...while Loop
 * Foreach
 */

/*
for ($i = 15; $i < 20; $i++) {
    echo 'Number'. ' '. $i;
    echo '<br>';
}


$i = 0;
while($i < 10){
    echo $i;
    echo '<br>';
    echo $i++;
}


$i = 0;
do {
    echo $i;
    echo '<br>';
    $i++;
} while ($i < 10);

 */

$people = array('Brad', 'Dolpaz', 'Abosede');
foreach ($people as $person){
    echo $person;
    echo '<br>';
}

$people = array('Brad' => 'brad@gmail.com', 'Dolpaz' => 'dolpaz@gmail.com', 'Abosede' =>'abosede@yahoo.com');

foreach ($people as $person => $email){
    echo $person. ':' . $email;
    echo '<br>';
}