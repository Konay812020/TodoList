<?php
// echo "Delee Tasking";
require_once("./connection.php");
$id = $_GET['id'];
$sql = "DELETE FROM task WHERE id=$id";
if (mysqli_query($connect, $sql)) {
    header("Location:./index.php");
} else {
    echo "Error....";
}
