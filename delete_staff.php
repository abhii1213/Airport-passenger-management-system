<?php
include "db_conn.php";
$sr = $_GET['sr'];
$sql = $_GET['sr'];
$sql="DELETE FROM `staff` WHERE sr=$sr";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: view_staffs.php?msg= Deleted successfully");
}
else{
    echo "Failed" . mysqli_error($conn);
}
?>