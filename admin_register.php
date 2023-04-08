<?php
    include "db_conn.php";

    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $passwordmd5=md5($password);
        $sql="INSERT INTO `admin`(`id`, `username`, `password`, `name`) VALUES (NULL,'$uname','$passwordmd5','$name')";

        $result = mysqli_query($conn,$sql);

        if($result){
            header("location: zadmin_index.php");            
        }
        else{
            echo "Failed" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        <h2>Sign Up Here </h2>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name" required><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required><br>
        
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your name" required><br>
        <br>
        <input type="submit" name="submit" class="b1">
    </form>
</body>

</html>