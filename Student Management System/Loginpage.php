<?php
    $db=new mysqli("localhost","root","","login");
    if($db->connect_error){
        die("connection failed". $db->connect_error);
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        extract($_POST);

        $sql = "SELECT * FROM users WHERE  name='$name' AND password='$password'";
        $result=$db->query($sql);
        if($result&&$result->num_rows>0){
            echo "data inserted succesfully";
            header("location:student_management_system.php");
        }
        else{
            echo "data not inserted";
        }
    }
    $db->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page Student Mt Sys</title>
    <link rel="icon" href="https://img.icons8.com/emoji/48/school-emoji.png" alt="school-emoji" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Kanit',sans-serif; background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%);">
    <?php include 'loadingpage.php' ?>
    <div class="container bg-white p-3 " style="border-radius:20px; width: 500px; margin-top: 170px;">
        <form action="Loginpage.php" method="POST">
            <h1 class="text-center" style="color: #f83600;"><i class="bi bi-box-arrow-in-right"></i> Login </h1>
            <div class="row-3 form-group">
                <div class="col-md-6 form-group mt-3">
                    <label for="name" style="margin-left: 100px; color: #f83600;"><i class="bi bi-person"></i> Name</label>
                    <input type="text" name="name" placeholder="Enter your Login name" class="form-control" style="margin-left: 100px; border-color: #f83600;" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label for="password" style="margin-left: 100px; color: #f83600;"><i class="bi bi-lock"></i> Password</label>
                    <input type="password" name="password" placeholder="Enter your Password" class="form-control" style="margin-left: 100px; border-color: #f83600;" required>
                </div>
                <div class="col-md-6 form-group">
                    <button  class="btn  text-white mt-3" style="margin-left: 200px; background-color: #f9d423; " type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>