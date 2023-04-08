<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="zadmin_login.php" method="post">
		<h2>Please Login To Continue</h2>
		<h2><a href="zadmin_index.php">ADMIN LOGIN</a><a href="index.php">USER LOGIN</a></h2>
		<br>
		<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Admin Name</label>
     	<input type="text" name="uname" placeholder="Admin Name"><br>

     	<label>Admin Password</label>
     	<input type="password" name="password" placeholder="Admin Password"><br>
			<br><br>
     	<button type="submit">Login</button>
		<!-- <button><a href="admin_register.php">Sign Up</a></button> -->
    </form>
</body>
</html>