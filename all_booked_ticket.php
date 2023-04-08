<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style6.css">
</head>

<body>
    <div class="badge bg-primary" style="width: 100% ; height: 43px;">
        <p class="fs-3">FLY SAFE WITH UDAN AIRLINES : Hello Admin </p>
    </div>
    <br><br>
    <div class="badges bg-primary" style="width: 20%; height: 43px;">
        <p class="fs-3">ALL_TICKETS</p>
    </div>
    <br>
    <div class="text-center">
        <button onclick="window.print()" class="btn btn-primary">Print</button>
    </div>
    <div class="one1">
        <?php
                include "db_conn.php";
                $sql= "SELECT * FROM `passenger` , `payment` WHERE `passenger`.sr=`payment`.sr";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
        <div class="one11">
            <div class="serialnumber">
                <tr>
                    <th>Traveller id:</th>
                    <td><?php echo  $row['sr'] ?></td>
                </tr>
            </div>
            <div class="travelling">
                <table class="table table-hover text-centre">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Travelling From</th>
                            <th scope="col">Travelling To</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <tr>
                            <th><?php echo  $row['t_from'] ?></th>
                            <th><?php echo  $row['t_to'] ?></th>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            
            
            <table class="table table-hover text-centre">
                <thead class="table-dark">
                    <h4>Passenger Details </h4>
                    <tr>
                        <th scope="col">Traveller Name</th>
                        <th scope="col"> Email id</th>
                        <th scope="col">Contact No.</th>
                        <th scope="col">Age</th>
                        <th scope="col">D.O.B</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <tr>
                        <th><?php echo  $row['traveller_name'] ?></th>
                        <th><?php echo  $row['myemail'] ?></th>
                        <th><?php echo  $row['mob_number'] ?></th>
                        <th><?php echo  $row['age']?></th>
                        <th><?php echo  $row['dob'] ?></th>
                    </tr>
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
                <tbody class="table-light">
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
            </table>
            <table class="table table-hover text-centre">
                <thead class="table-dark">
                    <h4>Payment details : </h4>
                    <tr>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Card no</th>
                        <th scope="col">Name on Card</th>
                        <th scope="col">Expiry</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <tr>
                        <th><?php echo  $row['amount'] ?></th>
                        <th><?php echo  $row['card_no'] ?></th>
                        <th><?php echo  $row['name_on_card'] ?></th>
                        <th><?php echo  $row['expiry'] ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
                }
                ?>
    
    </div>
    
</body>

</html>