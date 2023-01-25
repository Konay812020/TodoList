<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All List </title>
</head>

<body>
    <h1> Todo List</h1>
    <button style="margin: 5px 0px;"><a href='./create.php' style="padding:100px;text-decoration:none; color:black" />Create</a></button>
    <?php

    require_once("connection.php");
    $sql = "SELECT * FROM task";
    $query = mysqli_query($connect, $sql);

    $all_row = mysqli_num_rows($query); //int 7
    // mysqli_fetch_assoc($query)
    // var_dump($all_row);
    // var_dump(mysqli_fetch_assoc($query));
    echo "
       <table border='1'>
           <tr>
                <td>ID</td>
                <td>Taskname</td>
                <td>Created_time</td>
                <td>Action1</td>
                
            </tr>
      ";
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['created_at']}</td>";
        echo "<td>
        <a href='./update.php?id={$row['id']}'/>Update</a> |
        <a href='./delete.php?id={$row['id']}'/>Delete</a>
        </td>";

        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

</html>