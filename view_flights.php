<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
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
        <br>
    </nav>
    <!-- <nav class="navbar navbar-light justify-content-centre fs-3 mb-5" style="background-color: #00ff5573;">
        flight details
    </nav> -->
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
        <a href="add_flights.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-centre">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Flight Type</th>
                <th scope="col">Flight name</th>
                <th scope="col">departure</th>
                <th scope="col">deptarture time</th>
                <th scope="col">Arrival</th>
                <th scope="col">Arrival time</th>
                <th scope="col">date</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "db_conn.php";
                $sql= "SELECT * FROM `flights`";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th><?php echo  $row['id'] ?></th>
                        <th><?php echo  $row['flightid'] ?></th>
                        <th><?php echo  $row['flightname'] ?></th>
                        <th><?php echo  $row['departure'] ?></th>
                        <th><?php echo  $row['dept_time']?></th>
                        <th><?php echo  $row['arrival'] ?></th>
                        <th><?php echo  $row['arrival_time'] ?></th>
                        <th><?php echo  $row['date'] ?></th>
                        <th><?php echo  $row['price'] ?></th>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i     class="fa-solid fa-pen-to-square fs-5   me-3">update</i></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i     class="fa-solid fa-trash fs-5   me-3">delete</i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
        </tbody>
    </table>
    </div>
    <br><br><br><br><br>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>