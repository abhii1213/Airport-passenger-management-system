<?php
    include "db_conn.php";

    if(isset($_POST['submit'])){
        $staff_id = $_POST['staff_id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $designation = $_POST['designation'];
        $salary = $_POST['salary'];
        $aadhar = $_POST['aadhar'];
        
        

        $sql="INSERT INTO `staff`(`sr`, `staff_id`, `name`, `phone`, `email`, `company`, `designation`, `salary`, `aadhar`) VALUES ('NULL','$staff_id','$name','$phone','$email','$company','$designation','$salary','$aadhar')";

        $result = mysqli_query($conn,$sql);

        if($result){
            header("location: view_staffs.php?msg=New Staff added");
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
        <h1 class="header1">Add Staff details</h1>
        <form action="" method="post">
        <div class="container">
            <div class="container1">
                <div class="">
                    <label>Staff Id</label><br>
         	        <input type="text" name="staff_id" placeholder="Staff id" required><br>
                </div>
                <br>
                <div class="">
                    <label>Staff name</label><br>
         	        <input type="text" name="name" placeholder="Staff name" required><br>
                </div>
                <br>
                <div class="">
                    <label>Contact no.</label><br>
         	        <input type="number" name="phone" placeholder="Contact no." required><br>
                </div>
                <br>
                <div class="">
                    <label>Email :</label><br>
         	        <input type="email" name="email" placeholder="email " required>
                </div>
            </div>
            <div class="container1">
                <div class="">
                    <label>Company :</label><br>
         	        <input type="text" name="company" placeholder="company name" required><br>
                </div>
                <br>
                <div class="">
                    <label>Designation :</label><br>
         	        <input type="text" name="designation" placeholder="Designation" required><br>
                </div>
            
                <br>
                <div class="">
                    <label>Salary : </label><br>
         	        <input type="number" name="salary" placeholder="Salary (in Rs. per month)" required><br>
                </div>
                <br>
                <div class="">
                    <label>Aadhar No. :</label><br>
         	        <input type="number" name="aadhar" placeholder="Aadhar No :" required><br>
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