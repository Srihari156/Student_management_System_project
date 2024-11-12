<?php
    
    $db=new mysqli("localhost","root","","student");
    if($db->connect_error){
        die("connection failed". $db->connect_error);
    }
    $students=$db->query("select*from details");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        extract($_POST);
        $sql="insert into details(name,age,mobile_no,address,city,state,dob,standards,father_name,father_job,mother_name,mother_job,gender) values('$name','$age','$mobile_no','$address','$city','$state','$dob','$standards','$father_name','$father_job','$mother_name','$mother_job','$gender')";
        if($db->query($sql)){
            echo "data inserted successfully";
            header("location:student_management_system.php");
        }
        else{
            echo "data not inserted". $db->error;
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
    <header class="bg-warning text-white p-2"><img width="48" height="48" src="https://img.icons8.com/emoji/48/school-emoji.png" alt="school-emoji"/>Student Management System <span class="float-end"><a href="logout.php" class="btn btn-outline-danger">Logout</a></span></header>
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="height: 600px;">
    <div class="carousel-item active">
      <img src="pexels-max-fischer-5212345.jpg" class="d-block w-100 h-25" alt="images">
    </div>
    <div class="carousel-item">
      <img src="pexels-pixabay-159213.jpg" class="d-block w-100 h-25" alt="images2">
    </div>
    <div class="carousel-item">
      <img src="pexels-iqwan-alif-493640-1206101.jpg" class="d-block w-100 h-25" alt="images3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div> 
  <div class="container mt-5">
    <form action="" method="POST">
        <h1 class="text-center" style="color:#f9d423;"> <i class="bi bi-person-plus"></i> Student Add</h1>
        <div class="row-3 form-group">
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person"></i> Name:</label>
            <input type="text" class="form-control border-warning" id="Name"  placeholder="Enter Your Name" title="Name" name="name" required>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person-add"></i> Age:</label>
            <input type="number" class="form-control border-warning" id="Age"  placeholder="Enter Your Age" title="Age" name="age" required>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-phone"></i>Mobile Number:</label>
            <input type="tel" class="form-control border-warning" id="Mobile Number"  placeholder="Enter Your Mobile Number" title="Mobile Number" name="mobile_no" required minlength="10" maxlength="10">
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-house"></i>Address:</label>
            <!-- <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Your Address" title="Address"> -->
            <textarea class="form-control border-warning" id="Address" rows="3" placeholder="Enter Your Address" title="Address" name="address" required></textarea>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;">City:</label>
            <input type="text" class="form-control border-warning" id="City"  placeholder="Enter Your City" title="City" name="city" required>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;">State:</label>
            <select class="form-select border-warning" aria-label="Default select example" title="State" name="state" id="State" required>
                        <option value="">Select State</option>
                        <option value="Tamilnadu">Tamilnadu</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                      </select>
            </div>
            <div class="col-md-3 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-calendar-date"></i> Date of Birth:</label>
            <input type="date" class="form-control border-warning" id="dob"  title="Date of birth" name="dob" required>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Standards" style="color:#f9d423;">Standards:</label>
            <select class="form-select border-warning" aria-label="Default select example" title="Standards" name="standards" id="standards" required>
                        <option value="">Select Standards</option>
                        <option value="LKG">LKG</option>
                        <option value="UKG">UKG</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
            </select>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person"></i> Father Name:</label>
            <input type="text" class="form-control border-warning" id="Father Name"  placeholder="Enter Your Father Name" title="Father Name" name="father_name" required>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person-workspace"></i> Father Job:</label>
            <input type="text" class="form-control border-warning" id="Father Job"  placeholder="Enter Your Father Job" title="Father Job" name="father_job" required>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person"></i> Mother Name:</label>
            <input type="text" class="form-control border-warning" id="Mother Name"  placeholder="Enter Your Mother Name" title="Mother Name" name="mother_name" required>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Name" style="color:#f9d423;"><i class="bi bi-person-workspace"></i> Mother Job:</label>
            <input type="text" class="form-control border-warning" id="Mother Job"  placeholder="Enter Your Mother Job" title="Mother Job" name="mother_job" required>
            </div>
            <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Standards" style="color:#f9d423;">Gender:</label>
            <select class="form-select border-warning" aria-label="Default select example" title="Gender" name="gender" id="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
            </select>
            </div>
            <div class="col-md-6 form-group mt-3">
            <button type="submit" class="btn btn-warning text-white" name="submit" value="submit">Submit</button>
            </div>
        </div>
    </form>
    <br><br>
    <table class="table table-bordered border-warning">
        <tr class="bg-dark text-warning">
            <th>S.no</th>
            <th>Name</th>
            <th>Age</th>
            <th>Mobile no</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Date Of Birth</th>
            <th>Standards</th>
            <th>Father Name</th>
            <th>Father Job</th>
            <th>Mother Name</th>
            <th>Mother Job</th>
            <th>Gender</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            while($rows=$students->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['age'];?></td>
                    <td><?php echo $rows['mobile_no'];?></td>
                    <td><?php echo $rows['address'];?></td>
                    <td><?php echo $rows['city'];?></td>
                    <td><?php echo $rows['state'];?></td>
                    <td><?php echo $rows['dob'];?></td>
                    <td><?php echo $rows['standards'];?></td>
                    <td><?php echo $rows['father_name'];?></td>
                    <td><?php echo $rows['father_job'];?></td>
                    <td><?php echo $rows['mother_name'];?></td>
                    <td><?php echo $rows['mother_job'];?></td>
                    <td><?php echo $rows['gender'];?></td>
                    <td><a href="edit.php?id=<?php echo $rows['id']; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                    <td><form action="delete.php" onsubmit="return confirm('Are you sure delete the student record?');" method="POST"><input type="hidden" name="id" value="<?php echo $rows['id']; ?>" ><button type="submit" name="delete" class="btn btn-danger"><i class="bi bi-trash"></i></button></form></td>
                </tr>
            <?php }?>
    </table>
    <div>
                <p class="h5 mt-5 text-center">TO Check the class Wise here => <a href="searchstudents.php" class="btn btn-warning text-white">CLASS WISE</a></p>
    </div>
  </div> 
  <footer style="height: 10px;">
        <p class="text-center bg-dark text-warning p-3 ">copyright &copy; 2024 by <b>Student Management System</b></p>
    </footer>
</body>
</html>