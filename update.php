<!-- Getdata -> show -> Edit -> Update -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("./connection.php");
    $id = $_GET['id'];
    $getalldata = "SELECT * FROM task WHERE id=$id";
    $getquery = mysqli_query($connect, $getalldata);
    $data = mysqli_fetch_assoc($getquery);



    // if (isset($_POST['updatebtn'])) {

    //     $getid = $_POST['id'];
    //     $getname = $_POST['taskname'];
    //     if ($getname == null || $getname == "") {
    //         echo "<small style='color:red'>Please fill something</small>";
    //     } else {
    //         $update = "UPDATE task SET name='$getname' WHERE id=$getid";
    //         if (mysqli_query($connect, $update)) {
    //             header("Location:./index.php");
    //         } else {
    //             echo "Update error.....";
    //         }
    //     }
    // }

    if (isset($_GET['updatebtn'])) {
        $getid = $_GET['id'];
        $getname = $_GET['taskname'];
        if ($getname == $data['name'] || $getname == "") {
            echo "<small style='color:red'>Please fill something</small>";
            echo "<script>alert('oops! You must fill and edit ')</script>";
        } else {
            $update = "UPDATE task SET name='$getname' WHERE id=$getid";
            if (mysqli_query($connect, $update)) {
                // echo "<script>alert('Good Job')</script>";
                header("Location:./index.php");
            } else {
                echo "Update error.....";
            }
        }
    }




    ?>


    <h3>Update Data</h3>
    <!-- <form method="post"> -->
    <form method="GET">
        <label>Task :</label>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <input type="text" name="taskname" value="<?php echo $data['name']; ?>">
        <button name="updatebtn">Update</button>

    </form>

</body>

</html>