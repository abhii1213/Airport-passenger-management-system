<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style6.css">
</head>
<body>
<div class="container">
        
        <?php
            // if(isset($_GET['msg'])){
            //     $msg = $_GET['msg'];
            //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            //     '.$msg.'
            //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            //   </div>';
            // }
        ?>
        <div class="badge bg-primary" style="width: 100% ; height: 43px;">
            <p class="fs-3">FLY SAFE WITH ABHISHEK AIRLINES</p>
        </div>
        <br><br>
        <div class="badges bg-primary" style="width: 20%; height: 43px;">
            <p class="fs-3">TICKET</p>
        </div>
        <br>
        
    <div class="one">
    <div class="travelling">
    <table class="table table-hover text-centre">
        <thead class="table-dark" >
            <tr>
                <th scope="col">Travelling From</th>
                <th scope="col">Travelling To</th>
            </tr>
        </thead>
        <tbody  class="table-light">
            <?php
                include "db_conn.php";
                $sql= "SELECT * FROM `passenger` ORDER BY sr DESC LIMIT 1";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th><?php echo  $row['t_from'] ?></th>
                        <th><?php echo  $row['t_to'] ?></th>   
                    </tr>
                    <?php
                }
                ?>
            <br>
        </tbody>
    </table>
    <?php
        include "db_conn.php";
        $sql= "SELECT * FROM `ticket` ORDER BY sr DESC LIMIT 1";
        $result=mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            ?>           
            <h3>
                Travelling Date : <?php echo  $row['t_date'] ?>
            </h3> 
        <?php
        }
    ?>
    </div>
    <table class="table table-hover text-centre">
        <thead class="table-dark" >
        <h4>Passenger Details </h4>
            <tr>
                <th scope="col">Traveller Name</th>
                <th scope="col"> Email id</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Age</th>
                <th scope="col">D.O.B</th>

            </tr>
        </thead>
        <tbody  class="table-light">
            <?php
                include "db_conn.php";
                $sql= "SELECT * FROM `passenger` ORDER BY sr DESC LIMIT 1";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th><?php echo  $row['traveller_name'] ?></th>
                        <th><?php echo  $row['myemail'] ?></th>
                        <th><?php echo  $row['mob_number'] ?></th>
                        <th><?php echo  $row['age']?></th>
                        <th><?php echo  $row['dob'] ?></th>
                    </tr>
                    <?php
                }
                ?>

            <br>
        </tbody>
    </table>
    <table class="table table-hover text-centre">
        <thead class="table-dark">
            <tr>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Country</th>
                <th scope="col">Aadhar No.</th>
                <th scope="col">PAN</th>
                <th scope="col">STATUS</th>

            </tr>
        </thead>
        <tbody  class="table-light">
            <?php
                include "db_conn.php";
                $sql= "SELECT * FROM `passenger` ORDER BY sr DESC LIMIT 1";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <th><?php echo  $row['city'] ?></th>
                        <th><?php echo  $row['state'] ?></th>
                        <th><?php echo  $row['country'] ?></th>
                        <th><?php echo  $row['aadhar'] ?></th>
                        <th><?php echo  $row['pan'] ?></th>
                        <td>
                            <a href="#">Paid</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
        </tbody>
    </table>
    </div>
    <div class="advisory">
        <h4>
            Travel advisory: Safety during COVID-19
        </h4>
        <p>We seek your kind assistance to safeguard your well-being, as well as that of your fellow passengers and our crew on board our flights, by following the guidelines set out below:</p>
        <p>1. All customers should wear a mask and sanitize their hands before proceeding to the boarding gate.</p>
        <p>2. Customers must wear a face mask covering their nose and mouth, throughout their journey. The mask may be removed only while eating and drinking.</p>
        <p>3. Please maintain appropriate social distancing while boarding and de-boarding the aircraft.</p>
        <p>4. Customers are also requested to familiarise themselves with the guidelines for air passengers published by the Indian Ministry of Civil Aviation on the following link:</p>
        <p>&nbsp;&nbsp;&nbsp;
            <a href="https://www.civilaviation.gov.in/sites/default/files/Guidelines_for_Air_Passengers_21May.pdf">https://www.civilaviation.gov.in/sites/default/files/Guidelines_for_Air_Passengers_21May.pdf</a> 
        </p>
        <p> <b> Caution: Customers are advised to strictly follow all COVID-19 protocols. Failure to comply with these guidelines and the directions of our ground staff and/or crew may attract penal action against the concerned individual.</b></p>
    </div>
    <div class="text-center">
        <button onclick="window.print()" class="btn btn-primary">Print</button>
    </div>
</body>
</html>