<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Task</title>
</head>

<body>
    <h1>Add New Task For You</h1>
    <form action="" method="post">
        <label for="taskname">Task : </label>
        <input type="text" name="taskname" id="taskname" placeholder="Enter your new task">
        <button name="addbtn">Add</button>

    </form>
    <a href="./index.php">View</a>
    <?php
    require_once("connection.php");
    if (isset($_POST['addbtn'])) {
        $taskname = $_POST['taskname'];
        // echo $taskname;
        // insert into tablename (col1) values(val1)
        // $sql="insert into tablename (columnname) values("val")";
        //    mysqli_query($connect,$sql);
        $sql = "INSERT INTO task (name) VALUES ('$taskname')";
        // mysqli_query($connect, $sql);
        if (mysqli_query($connect, $sql)) {
            header("Location:./index.php");
        } else {
            echo "Error....";
        }
    }

    ?>
</body>

</html>