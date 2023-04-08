<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style7.css">
</head>
<body>
<nav id="navbar">
        <div id="logo">
            <img src="img/zabhi2.jpg" alt="">
            <!-- <p>Abhi-Airlines</p> -->
        </div>
        <ul>
            <li class="item"><a href="admin.php">Admin Home</a></li>
            <li class="item"><a href="add_flights.php">Add Flights</a></li>
            <li class="item"><a href="view_flights.php">view Flights</a></li>
            <li class="item"><a href="add_staffs.php">Add Staffs</a></li>
            <li class="item"><a href="view_staffs.php">Staffs</a></li>
            <li class="item"><a href="all_booked_ticket.php">All Tickets</a></li>
            <!-- <li class="item"><a href="registered_users.php">Registered users</a></li> -->
            <li class="item"><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <div class="admin">
        <h1>WELCOME ADMIN </h1>
    </div>
    <div class="lowerpart">
        <h3>Contact Us : +91-9523179244 +91-9142497834</h3>
        <h3>---------------------------------------</h3>
    </div>
</body>
<br><br><br>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>