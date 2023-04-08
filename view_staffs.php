<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
    <style>
        .printstaffreport{
            margin:auto;
            width:10%;
        }
    </style>
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
    </nav>
    <br>
    <br>
    <div class="container">
        <br>
        <?php
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>
        <a href="add_staffs.php" class="btn btn-dark mb-3">Add New Staff</a>

    <table class="table table-hover text-centre">
        <thead class="table-primary">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Staff id</th>
                <th scope="col">Staff name</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Email Id</th>
                <th scope="col">Company</th>
                <th scope="col">Designation</th>
                <th scope="col">Salary</th>
                <th scope="col">Aadhar</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
                include "db_conn.php";
                $sql= "SELECT * FROM `staff`";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th><?php echo  $row['sr'] ?></th>
                        <th><?php echo  $row['staff_id'] ?></th>
                        <th><?php echo  $row['name'] ?></th>
                        <th><?php echo  $row['phone'] ?></th>
                        <th><?php echo  $row['email']?></th>
                        <th><?php echo  $row['company'] ?></th>
                        <th><?php echo  $row['designation'] ?></th>
                        <th><?php echo  $row['salary'] ?></th>
                        <th><?php echo  $row['aadhar'] ?></th>
                        <td>
                            <!-- <a href="delete_staff.php?id=<?php echo $row['sr']?>" class="link-dark"><i     class="fa-solid fa-trash fs-5   me-3">delete</i></a> -->
                        </td>
                    </tr>
                    <?php
                }
                ?>
        </tbody>
    </table>
    <div class="printstaffreport">
        <a href="print_report.php" class="btn btn-primary mb-3">Print report</a>
    </div>
    
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>