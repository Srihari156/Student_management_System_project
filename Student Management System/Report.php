<?php
    
    $db=new mysqli("localhost","root","","student");
    if($db->connect_error){
        die("connection failed". $db->connect_error);
    }

    $results = null;
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $standards = $_POST['standards'];
    $sql = "SELECT details.id,details.name,details.standards,attendance_details.date,attendance_details.status FROM details INNER JOIN attendance_details ON details.id=attendance_details.student_id WHERE attendance_details.date='$date'  AND details.standards='$standards'";
    $results = $db->query($sql);

    if (!$results) {
        echo "Error: " . $db->error;
    }
    $summary_sql = "SELECT attendance_details.status, COUNT(*) as total 
                FROM details 
                INNER JOIN attendance_details 
                ON details.id = attendance_details.student_id 
                WHERE attendance_details.date = '$date' 
                AND details.standards = '$standards' 
                GROUP BY attendance_details.status";
    $summary_results = $db->query($summary_sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report to attendance</title>
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
        <h1 class="text-center text-warning mt-5"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/health-graph.png" alt="health-graph"/>Report to attendance</h1>
        <form action="" method="POST">
            <div class="row-2 form-group">
                <div class="col-md-3">
                    <label for="date" class="text-warning"><i class="bi bi-calendar"></i>Date</label>
                    <input type="date" name="date" id="date" class="form-control border-warning" required>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="standards" class="text-warning">Standards</label>
                    <select class="form-select border-warning" aria-label="Default select example" title="Standards" name="standards" required>
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
                <!-- <div class="col-md-6 form-group mt-3">
                <label for="attendance" class="text-warning">Attendance</label>
                    <select class="form-select" aria-label="Default select example" title="Standards" name="status" required>
                        <option value="">Select Present or Absent</option>
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                    </select>
                </div> -->
                <div class="col-md-6 form-group mt-3">
                    <button class="btn btn-warning text-white" type="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
        <br>
    <?php
    if ($results && $results->num_rows > 0):?>
    <!-- <table class="table table-bordered  border-warning">
        <thead>
            <tr class="bg-dark text-warning">
                <th>Name</th>
                <th>Standards</th>
                <th>Attendance</th>

            </tr>
        </thead>
        <tbody>
            <?php while ($row = $results->fetch_assoc()):?>
                <tr>
                    <td><?= htmlspecialchars($row['name']);?></td>
                    <td><?= htmlspecialchars($row['standards']);?></td>
                    <td><?= htmlspecialchars($row['status']);?></td>
                </tr>
                <?php endwhile;?>
        </tbody>
    </table>
    <br> -->
    <h3 class="text-center text-warning">Attendance Summary</h3>
    <table class="table table-bordered border-warning">
        <thead>
            <tr class="bg-dark text-warning">
                <th>Status</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $summary_results->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['status']); ?></td>
                    <td><?= htmlspecialchars($row['total']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
        <?php endif;?>
        
    </div>
    <footer style="height: 10px; align-items: bottom; margin-top: 200px;" >
        <p class="text-center bg-dark text-warning p-3 ">copyright &copy; 2024 by <b>Student Management System</b></p>
    </footer>
</body>
</html>