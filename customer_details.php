<?php
    include "db_conn.php";

    if(isset($_POST['submit'])){
        $t_from = $_POST['t_from'];
        $t_to = $_POST['t_to'];
        $t_date = $_POST['t_date'];
        $traveller_name = $_POST['traveller_name'];
        $myemail= $_POST['myemail'];
        $mob_number = $_POST['mob_number'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $aadhar = $_POST['aadhar'];
        $pan = $_POST['pan'];

        $amount = $_POST['amount'];
        $card_no = $_POST['card_no'];
        $name_on_card = $_POST['name_on_card'];
        $expiry = $_POST['expiry'];
        $cvc = $_POST['cvc'];
        $pin = $_POST['pin'];

        // $sql="INSERT INTO `passenger`(`sr`, `traveller_name`, `myemail`, `mob_number`, `age`, `dob`, `city`, `state`, `country`, `aadhar`, `pan`) VALUES (NULL,'$traveller_name','$myemail','$mob_number','$age','$dob','$city','$state','$country','$aadhar','$pan')";

        // $result = mysqli_query($conn,$sql);

        // if($result){
        //     header("location: ticket.php?msg= ticket booked");
        //     //echo "created successfully";
        // }
        // else{
        //     echo "Failed" . mysqli_error($conn);
        // }
        $sql="INSERT INTO `passenger`(`sr`,`t_from`,`t_to`, `traveller_name`, `myemail`, `mob_number`, `age`, `dob`, `city`, `state`, `country`, `aadhar`, `pan`) VALUES (NULL,'$t_from','$t_to','$traveller_name','$myemail','$mob_number','$age','$dob','$city','$state','$country','$aadhar','$pan')";
        $result = mysqli_query($conn,$sql);
        if($result==1)
        {
            $ins="INSERT INTO `payment`(`sr`, `amount`, `card_no`, `name_on_card`, `expiry`, `cvc`, `pin`) VALUES (NULL,'$amount','$card_no','$name_on_card','$expiry','$cvc','$pin')";
            $sql1=mysqli_query($conn,$ins);
            if($sql1==1)
            {
                $ticket="INSERT INTO `ticket`(`sr`, `traveller_name`, `t_date`, `mob_number`) VALUES ('NULL','$traveller_name','$t_date','$mob_number')";
                $sql2=mysqli_query($conn,$ticket);
                if($sql2==1)
                {
                    echo "Flight Booked Successfully";
                }
                
            }

        }
        if($result){
            header("location: ticket.php?msg= ticket booked");
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style5.css">
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
    <br><br>
    <div class="box">
        <form action="" method="post">
        <h5 class="travelling">Travelling  :</h5>
            <div class="flyingto">
                <div class="from">
                    <input type="text" name="t_from" placeholder="From :" required><br>
                </div>
                <div class="from">
                    <input type="text" name="t_to" placeholder="To :" required><br>
                </div>
                <div class="from">
                    Travelling date :<input type="date" name="t_date"><br>
                </div>
            </div>
            <div class="container">
            <div class="container1">
                <h5>Customer Details :</h5>
                <div class="traveller_name">
         	        <input type="text" name="traveller_name" placeholder="Name :" required><br>
                </div>
                <br>
                <div class="email_id">
         	        <input type="email" name="myemail" placeholder="Email Id" required><br>
                </div>
                <br>
                <div class="mob_number">
         	        <input type="number" name="mob_number" placeholder="Contact No" required><br>
                </div>
                <br>
                <div class="age">
         	        <input type="number" name="age" placeholder="Age:" required><br>
                </div>
                <br>
                <div class="dob">
                    <label>Date Of Birth :</label>
         	        <input type="date" name="dob" placeholder="Date of birth:" required><br>
                </div>
            </div>
            <br>
            <div class="container1">
                <h5>Address :</h5>
                <div class="city">
         	        <input type="text" name="city" placeholder="City" required><br>
                </div>
                <br>
                <div class="state">
         	        <input type="text" name="state" placeholder="State" required><br>
                </div>
                <br>
                <div class="country">
         	        <input type="text" name="country" placeholder="Country" required><br>
                </div>
                <br>
                <div class="aadhar">
         	        <input type="text" name="aadhar" placeholder="AAdhar No." required><br>
                </div>
                <br>
                <div class="pan">
         	        <input type="text" name="pan" placeholder="PAN No." required><br>
                </div>
            </div>
            <br>
            <div class="container1">
                <h5> Payment :</h5>
                <input type="number" name="amount" placeholder="Amount" required><br><br>
                <input type="number" name="card_no" placeholder="Card Number" required><br><br>
                <input type="text" name="name_on_card" placeholder="Name on Card" required><br><br>
                <label>Expiry Date :</label><br>
                <input type="date" name="expiry" placeholder="Expiry Date" required><br><br>
                <input type="number" name="cvc" placeholder="CVC no." required><br><br>
                <input type="number" name="pin" placeholder="Enter PIN" required><br><br>
            </div>
        </div>
        <div class="inputform">
            <input type="submit" name="submit" class="b1"><br>
        </div>
        </form><br>
    </div>
    <br><br><br><br>
</body>
</html>