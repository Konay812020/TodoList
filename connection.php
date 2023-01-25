<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <?php
    // mysqli_connect("hostname", "username", "password", "database");
    // $con=mysqli_connect("hsotname","username","passowrd","dbname");
    $connect = mysqli_connect("localhost", "nayoolwin", "812020", "todolist");
    if (!$connect) {
        echo "Database connection Fail";
    }
    ?>
</body>

</html>