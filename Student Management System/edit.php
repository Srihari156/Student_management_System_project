<?php
$db=new mysqli("localhost","root","","student");
    if($db->connect_error){
        die("connection failed". $db->connect_error);
    }
    $id=$_GET['id'];
    $result=$db->query("SELECT * FROM details where id='$id' ");
    $students=$result->fetch_assoc();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        extract($_POST);
        $sql="UPDATE details set name='$name', age='$age',mobile_no='$mobile_no',address='$address',city='$city',state='$state',dob='$dob',standards='$standards',father_name='$father_name',father_job='$father_job',mother_name='$mother_name',mother_job='$mother_job',gender='$gender' where id='$id'";
        if($db->query($sql)){
            echo "your data scuccessfully updated";
            header("location: student_management_system.php");
        }
        else{
            echo "your data not updated";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="icon" href="https://img.icons8.com/emoji/48/school-emoji.png" alt="school-emoji" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Kanit',sans-serif;">
<?php include 'loadingpage.php' ?>
<div class="container mt-5">
    <form action="" method="POST">
        <h1 class="text-center" style="color:#f9d423;">Student Add</h1>
        <div class="row-3 form-group">
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person"></i> Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['name']; ?>"  placeholder="Enter Your Name" title="Name" name="name">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person-add"></i> Age:</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['age']; ?>"  placeholder="Enter Your Age" title="Age" name="age">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-phone"></i>Mobile Number:</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['mobile_no']; ?>"  placeholder="Enter Your Mobile Number" title="Mobile Number" name="mobile_no">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-house"></i>Address:</label>
            <!-- <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Your Address" title="Address"> -->
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo $students['address']; ?>"  placeholder="Enter Your Address" title="Address" name="address"></textarea>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;">City:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['city']; ?>"  placeholder="Enter Your City" title="City" name="city">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;">State:</label>
            <select class="form-select" aria-label="Default select example"   title="State" name="state">
                        <option>Select State</option>
                        <option value="Tamilnadu" <?=$students['state'] == 'Tamilnadu' ? 'selected' : ''; ?>>Tamilnadu</option>
                        <option value="Kerala" <?=$students['state'] == 'Kerala' ? 'selected' : ''; ?>>Kerala</option>
                        <option value="Andhra Pradesh"  <?=$students['state'] == 'Andhra Pradesh' ? 'selected' : ''; ?>>Andhra Pradesh</option>
                        <option value="Telangana" <?=$students['state'] == 'Telangana' ? 'selected' : ''; ?>>Telangana</option>
                        <option value="Karnataka" <?=$students['state'] == 'Karnataka' ? 'selected' : ''; ?>>Karnataka</option>
                        <option value="Maharashtra" <?=$students['state'] == 'Maharashtra' ? 'selected' : ''; ?>>Maharashtra</option>
                        <option value="Gujarat" <?=$students['state'] == 'Gujarat' ? 'selected' : ''; ?>>Gujarat</option>
                        <option value="Rajasthan"   <?=$students['state'] == 'Rajasthan' ? 'selected' : ''; ?>>Rajasthan</option>
                        <option value="Haryana" <?=$students['state'] == 'Haryana' ? 'selected' : ''; ?>>Haryana</option>
                        <option value="Himachal Pradesh" <?=$students['state'] == 'Himachal Pradesh' ? 'selected' : ''; ?>>Himachal Pradesh</option>
                        <option value="West Bengal" <?=$students['state'] == 'West Bengal' ? 'selected' : ''; ?>>West Bengal</option>
                        <option value="Bihar" <?=$students['state'] == 'Bihar' ? 'selected' : ''; ?>>Bihar</option>
                        <option value="Madhya Pradesh" <?=$students['state'] == 'Madhya Pradesh' ? 'selected' : ''; ?>>Madhya Pradesh</option>
                        <option value="Andhra Pradesh"  <?=$students['state'] == 'Andhra Pradesh' ? 'selected' : ''; ?>>Andhra Pradesh</option>
                        <option value="Uttar Pradesh" <?=$students['state'] == 'Uttar Pradesh' ? 'selected' : ''; ?>>Uttar Pradesh</option>
                      </select>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-calendar-date"></i> Date of Birth:</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['dob']; ?>"  title="Date of birth" name="dob">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Standards" style="color:#f9d423;">Standards:</label>
            <select class="form-select" aria-label="Default select example" title="State"   name="standards">
                        <option>Select Standards</option>
                        <option value="LKG"  <?=$students['standards'] == 'LKG' ? 'selected' : ''; ?>>LKG</option>
                        <option value="UKG" <?=  $students['standards'] == 'UKG' ? 'selected' : '';?>>UKG</option>
                        <option value="I" <?=  $students['standards'] == 'I' ? 'selected' : ''; ?>>I</option>
                        <option value="II" <?=  $students['standards'] == 'II' ? 'selected' : ''; ?>>II</option>
                        <option value="III" <?=  $students['standards'] == 'III' ? 'selected' : ''; ?>>III</option>
                        <option value="IV" <?=  $students['standards'] == 'IV' ? 'selected' : '';  ?>>IV</option>
                        <option value="V" <?=  $students['standards'] == 'V' ? 'selected' : ''; ?>>V</option>
            </select>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person"></i> Father Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['father_name']; ?>" placeholder="Enter Your Father Name" title="Father Name" name="father_name">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person"></i> Father Job:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['father_job']; ?>" placeholder="Enter Your Father Job" title="Father Job" name="father_job">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person"></i> Mother Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['mother_name']; ?>" placeholder="Enter Your Mother Name" title="Mother Name" name="mother_name">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person"></i> Mother Job:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $students['mother_job']; ?>" placeholder="Enter Your Mother Job" title="Mother Job" name="mother_job">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Standards" style="color:#f9d423;">Gender:</label>
            <select class="form-select" aria-label="Default select example" title="Gender" name="gender">
                        <option >Select Gender</option>
                        <option value="Male" <?=  $students['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?=  $students['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
            </select>
            </div>
            <div class="col-md-6 form-group mt-3">
            <button type="submit" class="btn btn-warning text-white" name="submit" value="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
