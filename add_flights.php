<?php
    include "db_conn.php";

    if(isset($_POST['submit'])){
        $flightid = $_POST['flightid'];
        $flightname = $_POST['flightname'];
        $departure = $_POST['departure'];
        $dept_time = $_POST['dept_time'];
        $arrival = $_POST['arrival'];
        $arrival_time = $_POST['arrival_time'];
        $date = $_POST['date'];
        $price = $_POST['price'];

        $sql="INSERT INTO `flights`(`id`,`flightid`, `flightname`, `departure`, `dept_time`, `arrival`, `arrival_time`, `date`, `price`) VALUES (NULL,'$flightid','$flightname','$departure','$dept_time','$arrival','$arrival_time','$date','$price')";

        $result = mysqli_query($conn,$sql);

        if($result){
            header("location: view_flights.php?msg=New Flight added in database");
            //echo "created successfully";
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
    <title>Flights</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style2.css">
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
            <li class="item"><a href="logout.php">Log Out</a></li>
        </ul>
    </nav><br><br>
    <div class="box">
        <h1 class="header1">Insert flight details</h1>
        <form action="" method="post">
        <div class="container">
            <div class="container1">
                <div class="flightid1">
                    <label>Flight Type</label><br>
         	        <input type="text" name="flightid" placeholder="flight id" required><br>
                </div>
                <br>
                <div class="flightname1">
                    <label>Flight name</label><br>
         	        <input type="text" name="flightname" placeholder="flight name" required><br>
                </div>
                <br>
                <div class="departure1">
                    <label>Departure</label><br>
         	        <input type="text" name="departure" placeholder="departure city" required><br>
                </div>
                <br>
                <div class="arrival1">
                    <label>Arrival</label><br>
         	        <input type="text" name="arrival" placeholder="arrival city " required>
                </div>
            </div>
            <div class="container1">
                <div class="departure_time1">
                    <label>Departure time :</label><br>
         	        <input type="time" name="dept_time" required><br>
                </div>
                <br>
                <div class="arrival_time1">
                    <label>Arrival time :</label><br>
         	        <input type="time" name="arrival_time" required><br>
                </div>
            
                <br>
                <div class="date1">
                    <label>Date : </label><br>
         	        <input type="date" name="date" required><br>
                </div>
                <br>
                <div class="price1">
                    <label>Price :</label><br>
         	        <input type="text" name="price" placeholder="$ :" required><br>
                </div>
            </div>
        </div>
        <br><br>
        <div class="inputform">
            <input type="submit" name="submit" class="b1"><br><br>
        </div>
        </form>
    </div><br><br><br><br><br><br><br>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>