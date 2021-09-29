<?php
session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>
<!Doctype html>
<html>
<head>
    <title> Thank you page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
<h5>Thank you for <?php echo $name; ?>, You have been subscribed with the email <?php echo $email; ?></h5>
<a href="page3.php">Go to page 3</a>
</body>
</html>