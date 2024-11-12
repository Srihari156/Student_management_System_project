<?php
    $db=new mysqli("localhost","root","","student");
    if($db->connect_error){
        die("connection failed". $db->connect_error);
    }

    $result = null;
    if($_SERVER['REQUEST_METHOD'] === 'POST'&&isset($_POST['submit'])){
        $teacher_name = $db->real_escape_string($_POST['teacher_name']);
        $qualification = $db->real_escape_string( $_POST['qualification']);
        $experience = $db->real_escape_string($_POST['exp_no']);
        
        $sql = "INSERT INTO teacher_details(teacher_name,qualification,exp_no) VALUES('$teacher_name', '$qualification', '$experience')";
        if($db->query($sql)==TRUE){
            echo "data inserted successfully";
        }
        else{
            echo "data not inserted". $db->error;
        }
    }
    
    
    $result=$db->query("SELECT * FROM teacher_details");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers add</title>
    <link rel="icon" href="https://img.icons8.com/emoji/48/school-emoji.png" alt="school-emoji" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Kanit', sans-serif;">
<?php include 'loadingpage.php' ?>
    <div class="container">
        <h2 class="text-center" style="color:#f9d423;"><i class="bi bi-person-plus"></i>Teachers add</h2>
        <form action="" method="POST">
            <div class="row-2 form-group">
                <div class="col-md-6 form-group">
                <label for="exampleFormControlInput1" class="form-label" title="Teacher Name" style="color:#f9d423;"><i class="bi bi-person"></i> Teacher Name:</label>
                <input type="text" class="form-control border-warning" id="exampleFormControlInput1"  placeholder="Enter Your Name" title="Teachers Name" name="teacher_name" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                <label for="exampleFormControlInput1" class="form-label" title="Standards" style="color:#f9d423;">Standards:</label>
                <select class="form-select border-warning" aria-label="Default select example" title="Qualification" name="qualification" required>
                        <option value="">Select qualification</option>
                        <option value="B.E.">B.E.</option>
                        <option value="B.com">B.com</option>
                        <option value="B.sc">B.sc</option>
                        <option value="B.Ed">B.Ed</option>
                        <option value="B.A">B.A</option>
                        <option value="B.Ei.Ed.">B.Ei.Ed.</option>
                        <option value="M.Ed">M.Ed</option>
                        <option value="Diploma">Diploma</option>
                        <option value="M.E.">M.E.</option>
                        <option value="M.A.">M.A.</option>
                        <option value="M.Sc.">M.Sc.</option>
                        <option value="M.Com.">M.Com.</option>
            </select>
            </div>
            <!-- <div class="col-md-6 form-group mt-3">
            <label for="exampleFormControlInput1" class="form-label" title="Standards" style="color:#f9d423;">Standards:</label>
            <select class="form-select" aria-label="Default select example" title="Standards" name="standards" required>
                        <option value="">Select Standards</option>
                        <option value="LKG">LKG</option>
                        <option value="UKG">UKG</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
            </select>
            </div> -->
            <div class="col-md-6 form-group mt-3">
                <label for="exampleFormControlInput1" class="form-label" title="Experience" style="color:#f9d423;">Experience:</label>
                <select class="form-select border-warning" aria-label="Default select example" title="Experience" name="exp_no" required>
                        <option value="">Select Experience</option>
                        <option value="Fresher">Fresher</option>
                        <option value="1 Year">1 Year</option>
                        <option value="2 Year">2 Year</option>
                        <option value="3 Year">3 Year</option>
                        <option value="4 Year">4 Year</option>
                        <option value="5 Year">5 Year</option>
                        <option value="6 Year">6 Year</option>
                        <option value="7 Year">7 Year</option>
                        <option value="8 Year">8 Year</option>
                        <option value="9 Year">9 Year</option>
                        <option value="10 Year">10 Year</option>
                        <!-- <option value="11 Year">11 Year</option>
                        <option value="12 Year">12 Year</option>
                        <option value="13 Year">13 Year</option>
                        <option value="14 Year">14 Year</option>
                        <option value="15 Year">15 Year</option>
                        <option value="16 Year">16 Year</option>
                        <option value="17 Year">17 Year</option>
                        <option value="18 Year">18 Year</option>
                        <option value="19 Year">19 Year</option>
                        <option value="20 Year">20 Year</option> -->
            </select>
            </div>
            <div class="col-md-6 form-group mt-3">
                <input type="submit" class="btn btn-warning text-white " value="Submit" name="submit">
            </div>
        </form>
        <br>
        <table class="table  table-bordered  border-warning">
            <tr class="bg-dark text-warning">
                <th>Teacher Name</th>
                <th>Qualification</th>
                <th>Experience</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()):?>
                <tr>
                    <td><?= htmlspecialchars($row['teacher_name']);?></td>
                    <td><?= htmlspecialchars($row['qualification']);?></td>
                    <td><?= htmlspecialchars($row['exp_no']);?></td>
                    <td><a href="teacheredit.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                    <td><form action="teacherdelete.php" onsubmit="return confirm('Are you sure delete the teacher record?');" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>" ><button type="submit" name="delete" class="btn btn-danger"><i class="bi bi-trash"></i></button></form></td>
                </tr>
                <?php endwhile;?>
        </table>
        <p class="h5 mt-5 text-center">TO check the teachers attendence wise here => <a href="teacherattendance.php" class="btn btn-warning text-white">teacher Attendence</a></p>
    </div>
    <footer style="height: 10px; align-items: bottom;" >
        <p class="text-center bg-dark text-warning p-3 ">copyright &copy; 2024 by <b>Student Management System</b></p>
    </footer>
</body>
</html>