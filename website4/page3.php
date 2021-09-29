<?php
session_start();
print_r($_SESSION);
$name = $_SESSION['name'];
$email = $_SESSION['email'];
?>
<!Doctype html>
<html>
<head>
    <title> PHP Sessions </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
<h2>Hello <?php echo $name; ?></h2>
</body>
</html>