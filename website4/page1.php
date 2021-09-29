<?php if (isset($_POST['submit'])) {
    session_start();
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);
    header('Location: page2.php');
} ?>
<!Doctype html>
<html>
<head>
    <title> Sessions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="">
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
    <button type="reset" class="btn btn-success">Reset All Fields</button>
</form>
</body>
</html>