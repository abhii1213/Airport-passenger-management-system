<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = md5($_POST['password']);

	if (empty($uname)) {
		header("Location: zadmin_index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: zadmin_index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: admin.php");
		        exit();
            }else{
				header("Location: zadmin_index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: zadmin_index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: zadmin_index.php");
	exit();
}
?>