<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registered users</title>
    <link rel="stylesheet" href="style7.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .printusers {
            background-color: white;
            border: 2px solid rgb(23, 22, 22);
            border-radius: 9px;
            width:85%;
            margin:auto;
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
            <li class="item"><a href="registered_users.php">Registered users</a></li>
            <li class="item"><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <br><br><br>
    <div class="printusers">
        <h3>REGISTERED USERS</h3>
        <table class="table table-hover text-centre">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";
                $sql= "SELECT * FROM `users`";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                <tr>
                    <th><?php echo  $row['id'] ?></th>
                    <th><?php echo  $row['name'] ?></th>
                    <th><?php echo  $row['username'] ?></th>
                    <th><?php echo  $row['password'] ?></th>
                    <td>
                        <a href="delete_registered_users.php?id=<?php echo $row['id']?>" class="link-dark"><i
                                class="fa-solid fa-trash fs-5   me-3">Delete </i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="lowerpart">
        <h3>Contact Us : +91-9523179244 +91-9142497834</h3>
        <h3>---------------------------------------</h3>
    </div>
</body>

</html>