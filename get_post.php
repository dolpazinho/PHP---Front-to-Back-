<?php
/*
if (isset($_GET['name'])){
    // print_r($_GET);
    // echo $_GET['name'] ;
    // echo $_GET['email'];
}

if (isset($_POST['name'])){
    // print_r($_GET);
    // echo $_GET['name'] ;
    // echo $_GET['email'];
    $name = htmlentities($_POST['name']);
    echo $name;
}
*/

if (isset($_REQUEST['name'])){
    // print_r($_REQUEST);
    // echo $_GET['name'] ;
    // echo $_GET['email'];
    $name = htmlentities($_REQUEST['name']);
    // echo $name;
}
?>
<!Doctype html>
<html>
<head>
    <title> My website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="get_post.php">
    <div>
        <label>Name</label><br>
        <input type="text" name="name">
    </div>
    <div>
        <label>Email</label><br>
        <input type="text" name="email">
    </div><br>
    <input type="submit" value="submit">
</form>
<ul>
    <li>
        <a href="get_post.php?name=Dolpaz">Dolpaz</a>
    </li>
    <li>
        <a href="get_post.php?name=Tolu">Tolu</a>
    </li>
</ul>
<h2><?php echo "{$name}'s Profile"; ?></h2>
</body>
</html>