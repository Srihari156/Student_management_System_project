<?php
    $db=new mysqli("localhost","root","","student");
    if($db->connect_error){
        die("connection failed". $db->connect_error);
    }

    // $results = null;
    
    if(isset($_POST['submit'])){
        $standards = $_POST['standards'];
        $date = $_POST['date'];
        $sql = "SELECT id, name, standards FROM details WHERE standards = '$standards'";
        $result = $db->query($sql);   
    }
    

    if(isset($_POST['attendance_submit'])) {
        $date = $_POST['date'];
        $status = $_POST['status'];
        
        foreach ($status as $id => $stats) {
            $sql = "insert into attendance_details(student_id,date,status) values('$id','$date','$stats')
            ON DUPLICATE KEY UPDATE status='$stats'";
             $db->query($sql);
        }
        echo "Attendance updated successfully!";

       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
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
    <div class="container">
        <p class="h1 mt-5 text-center text-warning"><i class="bi bi-file-person"></i>Attendance classwise</p>
    <form method="POST" action="">
        <div class="row-3 form-group">
            <div class="col-md-3 form-group">
                <label for="standards" class="text-warning">Standards</label>
                <select class="form-select border-warning" aria-label="Default select example"   title="Standards" name="standards" required>
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
            <div class="col-md-3 form-group mt-3">
                <label for="date" class="text-warning"><i class="bi bi-calendar"></i>Date</label><br>
                <input type="date" name="date" id="date" title="date" class="form-control border-warning" required>
            </div>
            <div class="col-md-4 form-group mt-3">
                <button class="btn btn-warning text-white" type="submit" name="submit">Submit</button>
            </div>
        </div>
    </form>
    <br>
    <?php if(isset($result) && $result->num_rows > 0): ?>
    <form action="" method="POST">
    <input type="hidden" name="date" value="<?php echo $date; ?>">
    <table class="table  table-bordered  border-warning">
        <thead>
        <tr class="bg-dark text-warning">
            <th>name</th>
            <th>Standards</th>
            <th>Attendance</th>
        </tr>
        </thead>
        <tbody>
        <?php
                while($row=$result->fetch_assoc()): ?>
                   <tr>
                       <td><?php echo $row['name'];?></td>
                       <td><?php echo $row['standards'];?></td>
                       <td>
                        <input type="radio" name="status[<?=$row['id'];?>]"  value="present" ><span class="text-success">Present</span>  <br>
                        <input type="radio" name="status[<?=$row['id'];?>]"  value="Absent" ><span class="text-danger">Absent</span>
                    </td>
                   </tr>
               <?php endwhile; ?>
        </tbody>
    </table>
    <button class="btn btn-warning text-white" type="submit" name="attendance_submit">Submit</button>
                </form>
    <?php endif; ?>
    <p class="h5 mt-5 text-center">to check your Report => <a href="Report.php" class="btn btn-warning text-white">ATTENDANCE REPORT</a></p>
    </div>
    <footer style="height: 10px; align-items: bottom;" >
        <p class="text-center bg-dark text-warning p-3 ">copyright &copy; 2024 by <b>Student Management System</b></p>
    </footer>
</body>
</html>




