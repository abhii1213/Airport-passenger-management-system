<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style8.css">
</head>
<body>
        <div class="container">
        <br>
        <div class="badge bg-primary" style="width: 100% ; height: 43px;">
            <p class="fs-3">Staff Report</p>
        </div>
        <br><br><br>
        <table class="table table-hover text-centre">
        <thead class="table-primary">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Staff id</th>
                <th scope="col">Name</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Email Id</th>
                <th scope="col">Company</th>
                <th scope="col">Designation</th>
                <th scope="col">Salary</th>
                <th scope="col">Aadhar</th>
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
                    </tr>
                    <?php
                }
                ?>
        </tbody>
    </table>
    </div>
    <div class="text-center">
        <button onclick="window.print()" class="btn btn-primary">Print</button>
    </div>
    <br><br>
</body>
</html>