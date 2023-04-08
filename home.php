<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style1.css">
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
    <h2 class="a1">Welcome to www.udanairlines.com - Book your flights at cheaper rates</h2>
    <!-- <h2>abhiairlines.com</h2> -->
        <div class="all">
            <div class="form">
                <div class="form1">
                    <h2>Search Flights</h2><br>
                    <input type="text" name="from" placeholder="From"><br><br>
                    <input type="text" name="to" placeholder="To"><br><br>
                    <label>Enter Date :</label><br>
                    <input type="date" ><br><br>
                    <label>Adults :</label><br>
                    <input type="number" ><br><br>
                    <input type="submit" name="submitform" class="submitform1"><br>
                </div>
            </div>
            <div class="sometext">
                <br>
                <div class="sometext_1">HAPPY</div>
                <div class="sometext_2">2023</div>
                <div class="sometext_3">HERE'S WISHING YOU A GREAT NEW YEAR AND NON STOP EXPERIENCES</div>
                <p class="sometext_4">Fly to 100+ destinations including New York,San Fransisco, Chicago, Washington DC, New Jersey, london, Brimhingam, Melbourne, Sydney, Toronto ,Tokyo, Singapore, Hong Kong, Paris, Dubai, Sharjah, Yakutsk , Rome and Bangkok</p>
            </div>
        </div>
        <br>
        <br>
        <div class="deals">
            <div class="aa2">&nbsp; Irresistible deals only for you</div>
            <div class="alldeals">
                <div class="deal1">
                    <h4 class="deal1_1">Enjoj ADDONS at</h4>
                    <div>
                        <div class="deal1_2_a">Upto</div>
                        <div class="deal1_2_b">25 % Off</div>
                    </div>
                    <h4 class="deal1_4">ADDON25</h4>
                    <h5 class="deal1_5"> Valid till : January 15 , 2023</h5>
                </div>
                <div class="deal2">
                    <h4 class="deal2_1">KWIK CASHBACKS</h4>
                    <div>
                        <div class="deal1_2_a">get Flat</div>
                        <div class="deal1_2_b">₹300 Cashback</div>
                    </div>
                    <h4 class="deal2_4">SP JMBK</h4>
                    <h5 class="deal2_5"> Valid till : January 25 , 2023</h5>
                </div>
                <div class="deal3">
                    <h4 class="deal3_1">Visa Service</h4>
                    <div>
                        <div class="deal1_2_a">Upto</div>
                        <div class="deal1_2_b">₹750 off</div>
                    </div>
                    <h4 class="deal3_4">Visa750</h4>
                    <h5 class="deal3_5"> Valid till : January 31 , 2023</h5>
                </div>
            </div>
            
        </div>
        <br><br><br>
        
        <div class="cargo">
            <div class="cargo1">
                <div class="cargo_1">
                    <div class="cargo_1a">
                        <img class="img2" src="img/zcargo.png" alt="">
                    </div>
                    <div class="cargo_1b">
                        <div class="cargo_1b_a">
                            Cargo
                        </div>
                        <div class="cargo_1b_b">
                            Small, Medium, Large & X-Large
                        </div>
                        <div class="cargo_1b_c">
                            Get your cargo shipped from one place to another at a convenient and cost-effective manner.
                        </div><br>
                        <button class="button_1"><a href="search.php" class="button_1_1">Book Now!</a></button>
                    </div>
                </div>
                <div class="cargo_2">
                    <div class="cargo_2a">
                        <img class="img2" src="img/zcharter.png" alt="">
                    </div>
                    <div class="cargo_2b">
                        <div class="cargo_1b_a">
                            Charter
                        </div>
                        <div class="cargo_1b_b">
                            Your private space in the sky
                        </div>
                        <div class="cargo_1b_c">
                            Now book a private charter for small groups or big.
                        </div><br><br>
                        <button class="button_1"><a href="search.php" class="button_1_1">Book Now!</a></button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="lowerpart">
            <br>
            <h3>Contact Us : +91-9523179244 +91-9142497834</h3>
            <h3>Email us : udan523@gmail.com</h3>
            <h3>BENGALURU INDIA</h3>
            <h3>---------------------------------------</h3>
        </div>
        
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>