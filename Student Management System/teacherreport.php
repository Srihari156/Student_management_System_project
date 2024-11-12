<?php
     $db=new mysqli("localhost","root","","student");
     if($db->connect_error){
         die("connection failed". $db->connect_error);
     }
     $summary_results=null;
     if(isset($_POST['submit'])){
        $date = $_POST['date'];
     $summary_sql = "SELECT teacher_attendance_details.status, COUNT(*) as total 
                FROM teacher_details 
                INNER JOIN teacher_attendance_details 
                ON teacher_details.id = teacher_attendance_details.teacher_id 
                WHERE teacher_attendance_details.date = '$date'  
                GROUP BY teacher_attendance_details.status";
    $summary_results = $db->query($summary_sql);
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Report</title>
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
        <h1 class="text-center text-warning mt-5"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/health-graph.png" alt="health-graph"/>Teacher Report</h1>
        <form action="" method="POST">
            <div class="row-3 form-group">
                <div class="col-md-3 form-group">
                <label for="date" class="text-warning"><i class="bi bi-calendar"></i>Date</label>
                <input type="date" name="date" id="date" class="form-control border-warning" required>
                </div> 
                <div class="col-md-3 form-group mt-3">
                    <button class="btn btn-warning text-white" type="submit" name="submit">Submit</button>
                </div>
            </div>  
        </form>
        <br>
        <h3 class="text-center text-warning">Teacher attendance Summary</h3>
        <table class="table table-bordered border-warning">
        <thead>
            <tr class="bg-dark text-warning">
                <th>Status</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($summary_results && $summary_results->num_rows > 0): ?>
            <?php while ($row = $summary_results->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['status']); ?></td>
                    <td><?= htmlspecialchars($row['total']); ?></td>
                </tr>
            <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
        
    </div>
    <footer style="height: 10px; align-items: bottom; margin-top: 300px;" >
        <p class="text-center bg-dark text-warning p-3 ">copyright &copy; 2024 by <b>Student Management System</b></p>
    </footer>
</body>
</html>