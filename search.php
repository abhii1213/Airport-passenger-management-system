<?php
    include 'db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css">

</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="img/zabhi2.jpg" alt="">
            <!-- <p>Abhi-Airlines</p> -->
        </div>
        <ul>
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="search.php">Search</a></li>
            <li class="item"><a href="viewflight.php">Flights</a></li>
            <li class="item"><a href="contact.php">Contact Us</a></li>
            <li class="item"><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <br>
    <h2 class="a1">Welcome to www.udanairlines.com - Book your flights at cheaper   rates</h2>
    <br><br>
    <div class="form">
        <form action="" method="post">
            <h2>Search Flights</h2><br>
            <input type="text" name="from" placeholder="From"><br><br>
            <input type="text" name="to" placeholder="To"><br><br>
            <label>Enter Date :</label><br>
            <input type="date" ><br><br>
            <label>Adults :</label><br>
            <input type="number" ><br><br>
            <button class="submitform1" name="submit">Search</button>
        </form>
    </div>
    <br>
    <div class="container" my-5>
        <table class="table">
            <?php
                if(isset($_POST['submit'])){
                    $search=$_POST['from'];
                    $search1=$_POST['to'];

                    $sql="select * from `flights` where departure = '$search' and arrival = '$search1'";
                    // $sql="select * from `flights` where id like '%$search%' or departure like'%$search%' or arrival like'%$search%'";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo '<thead>
                            <tr>
                            <th> ID</th>
                            <th> Flight id</th>
                            <th> Flight Name</th>
                            <th> departure</th>
                            <th> departure time</th>
                            <th> arrival</th>
                            <th> arrival time</th>
                            <th> date</th>
                            <th> price</th>
                            <th> Action</th>
                            </tr>
                            </thead>
                            ';
                            while($row=mysqli_fetch_assoc($result)){
                            echo '<tbody>
                            <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['flightid'].'</td>
                                <td>'.$row['flightname'].'</td>
                                <td>'.$row['departure'].'</td>
                                <td>'.$row['dept_time'].'</td>
                                <td>'.$row['arrival'].'</td>
                                <td>'.$row['arrival_time'].'</td>
                                <td>'.$row['date'].'</td>
                                <td>'.$row['price'].'</td>
                                <td> <a href="customer_details.php"> Book </a></td>
                            </tr>
                            </tbody>';
                            }
                        }else{
                            echo '<h2 class=text-danger>Flight not found</h2>';
                        }
                    }
                }

                
            ?>

        </table>
    </div>
    <br><br><br><br>
</body>
</html>