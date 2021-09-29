<?php

if (count($_COOKIE) > 0) {
    echo 'There are '.count($_COOKIE), ' cookies saved <br>';
} else{
    echo 'There are no cookies saved';
}
if (isset($_POST['submit'])){
    $username = htmlentities($_POST['username']);
    $email = htmlentities($_POST['email']);
    setcookie('username', $username, time()+3600);
    setcookie('email', $email, time()+3600);
    header('Location: page2.php');
}
?>

<!Doctype html>
<html>
<head>
    <title> PHP Cookies </title>
    <link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" >My Website</a>
        </div>
    </div>
</nav>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Enter your username">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter your username">
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
    <button type="reset" class="btn btn-success">Reset All Fields</button>
</form>
</div>

</body>
</html>