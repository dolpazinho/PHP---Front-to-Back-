<?php
    //Check for posted data
/*
if (filter_has_var(INPUT_POST, 'data')){
    echo 'Data Found';
} else{
    echo 'No Data';
}



if (filter_has_var(INPUT_POST, 'data')){

    $email = $_POST['data'];
    //Remove illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email. '<br>';
   if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo 'Email is Valid';
   } else{
       echo 'Email is not valid';
   }
}


$var = 23.9;
if (filter_var($var, FILTER_VALIDATE_INT)){
    echo $var. ' is a number';
} else {
    echo $var. ' is not a number';
}



$var = '<<script>alert(1)</script>>';
// echo $var;
echo filter_var($var, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));



$filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
                "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
);
print_r(filter_input_array(INPUT_POST, $filters));

*/

$arr = array(
        "name" => "Olasunkanmi Adeniji",
        "age" => "35",
        "email" => "dolpaz@gmail.com"
);
$filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "option" => "ucwords"
        ),
    "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120,
        )
    ),
    "email" => FILTER_VALIDATE_EMAIL
);
print_r(filter_var_array($arr, $filters));
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data" id="">
    <input type="text" name="data2" id="">
    <button>Submit</button>
</form>