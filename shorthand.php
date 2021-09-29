<?php
$loggedIn = false;
$arr = [1, 2, 3 ,4, 5];
/*
if($loggedIn){
    echo 'You are logged in';
} else {
    echo 'You are not Logged in';
}

echo($loggedIn) ? 'You are Logged in' : 'You are not Logged in';



$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered;
$age = 20;
$score = 15;

echo 'Your score is: '.($score > 10 ? ($age > 10  ? 'Average' : 'Exceptional'):($age > 10 ? 'Horrible':'Average'));

*/

?>

<div>
    <?php if($loggedIn) { ?>
        <h2>Welcome User</h2>
   <?php } else { ?>
    <h2>Welcome Guest</h2>
    <?php } ?>
</div>

<div>
    <?php  foreach ($arr as $val) : ?>
    <?php echo $val; ?>
    <br>
    <?php endforeach; ?>
</div>

<div>
    <?php for($i = 0; $i < 10; $i++) : ?>
       <li> <?php echo $i; ?></li>
        <br>
    <?php endfor; ?>
</div>
