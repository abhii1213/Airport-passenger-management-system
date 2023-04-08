<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = $_GET['id'];
$sql="DELETE FROM `users` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: registered_users.php?msg= User deleted successfully");
}
else{
    echo "Failed" . mysqli_error($conn);
}
?>