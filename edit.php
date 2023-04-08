<?php
    include "db_conn.php";
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $flightid = $_POST['flightid'];
        $flightname = $_POST['flightname'];
        $departure = $_POST['departure'];
        $dept_time = $_POST['dept_time'];
        $arrival = $_POST['arrival'];
        $arrival_time = $_POST['arrival_time'];
        $date = $_POST['date'];
        $price = $_POST['price'];

        $sql="UPDATE `flights` SET `flightid`='$flightid',`flightname`='$flightname',`departure`='$departure',`dept_time`='$dept_time',`arrival`='$arrival',`arrival_time`='$arrival_time',`date`='$date',`price`='$price' WHERE id=$id";

        $result = mysqli_query($conn,$sql);

        if($result){
            header("location: view_flights.php?msg=Flight Updated successfully");
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
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="add_flights.php">Add Flights</a></li>
            <li class="item"><a href="view_flights.php">view Flights</a></li>
            <li class="item"><a href="search.php">Search</a></li>
            <li class="item"><a href="contact.php">Contact Us</a></li>
            <li class="item"><a href="logout.php">Log Out</a></li>
        </ul>
    </nav><br><br>
    <div class="box">
        <h1 class="header2">Update flight details</h1>
        <?php
            $sql = "SELECT * FROM `flights` WHERE id= $id LIMIT 1";
            $result = mysqli_query($conn ,$sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <form action="" method="post">
        <div class="container">
            <div class="container1">
                <div class="flightid1">
                    <label>Flight Id</label><br>
         	        <input type="text" name="flightid" value="<?php echo $row['flightid']?>"><br>
                </div>
                <br>
                <div class="flightname1">
                    <label>Flight name</label><br>
         	        <input type="text" name="flightname" value="<?php echo $row['flightname']?>"><br>
                </div>
                <br>
                <div class="departure1">
                    <label>Departure</label><br>
         	        <input type="text" name="departure" value="<?php echo $row['departure']?>"><br>
                </div>
                <br>
                <div class="arrival1">
                    <label>Arrival</label><br>
         	        <input type="text" name="arrival" value="<?php echo $row['arrival']?>">
                </div>
            </div>
            <div class="container1">
                <div class="departure_time1">
                    <label>Departure time :</label><br>
         	        <input type="time" name="dept_time" value="<?php echo $row['dept_time']?>"><br>
                </div>
                <br>
                <div class="arrival_time1">
                    <label>Arrival time :</label><br>
         	        <input type="time" name="arrival_time" value="<?php echo $row['arrival_time']?>"><br>
                </div>
            
                <br>
                <div class="date1">
                    <label>Date : </label><br>
         	        <input type="date" name="date" value="<?php echo $row['date']?>"><br>
                </div>
                <br>
                <div class="price1">
                    <label>Price :</label><br>
         	        <input type="text" name="price" value="<?php echo $row['price']?>"><br>
                </div>
            </div>
        </div>
        <br><br>
        <div class="inputform">
            <input type="submit" name="submit" class="b1"><br><br>
        </div>
        </form>
    </div>
    <br><br><br><br><br><br><br>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>