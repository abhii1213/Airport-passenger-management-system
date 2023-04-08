<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = $_GET['id'];
$sql="DELETE FROM `flights` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: view_flights.php?msg= Flight Deleted Successfully");
}
else{
    echo "Failed" . mysqli_error($conn);
}
?>