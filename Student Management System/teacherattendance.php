<?php
    // Database connection
    $db = new mysqli("localhost", "root", "", "student");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $result = null; // Initialize result as null

    // Check if the date is submitted
    if (isset($_POST['submit'])) {
        $date = $_POST['date'];
        // Query to fetch teacher details
        $sql = "SELECT id, teacher_name FROM teacher_details";
        $result = $db->query($sql);

        // Check if the query was successful
        if ($result === false) {
            echo "Error in query: " . $db->error;
        }
    }

    // Handle attendance submission
    if (isset($_POST['attendance_submit'])) {
        $date = $_POST['date'];
        $status = $_POST['status'];

        foreach ($status as $id => $stats) {
            $sql = "INSERT INTO teacher_attendance_details(teacher_id, date, status) 
                    VALUES('$id', '$date', '$stats')
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
    <title>Teacher Attendance</title>
    <link rel="icon" href="https://img.icons8.com/emoji/48/school-emoji.png" alt="school-emoji" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Kanit', sans-serif;">
<?php include 'loadingpage.php' ?>
<div class="container">
    <p class="h1 mt-5 text-center text-warning"><i class="bi bi-file-person"></i> Teacher Attendance</p>

    <!-- Date Selection Form -->
    <form action="" method="POST">
        <div class="row-3 form-group ">
            <div class="col-md-3 form-group">
        <label for="exampleFormControlInput1" class="form-label" style="color:#f9d423;">
                <i class="bi bi-calendar"></i> Date:
            </label>
            <input type="date" class="form-control border-warning" id="exampleFormControlInput1" name="date" required>
            </div>
            <br>
            <div class="col-md-3 form-group">
            <button type="submit" class="btn btn-warning text-white" name="submit">Submit</button>
            </div>
        </div>
    </form>
    <br>
    <!-- Display the teacher list if results are available -->
    <?php if (isset($result) && $result->num_rows > 0): ?>
        <form action="" method="POST">
            <input type="hidden" name="date" value="<?php echo $date; ?>">
            <table class="table table-bordered border-warning">
                <thead>
                    <tr class="bg-dark text-warning">
                        <th>Teacher Name</th>
                        <th>Attendance</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['teacher_name']; ?></td>
                        <td>
                            <input type="radio" name="status[<?php echo $row['id']; ?>]" value="present"> <span class="text-success">Present</span> <br>
                            <input type="radio" name="status[<?php echo $row['id']; ?>]" value="absent"> <span class="text-danger">Absent</span>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <button class="btn btn-warning text-white" type="submit" name="attendance_submit">Submit Attendance</button>
        </form>
    <?php endif; ?>
</div>
<p class="h5 mt-5 text-center">to check your Report => <a href="teacherreport.php" class="btn btn-warning text-white">TEACHER ATTENDANCE REPORT</a></p>
<footer style="height: 10px; align-items: bottom; margin-top: 300px;" >
        <p class="text-center bg-dark text-warning p-3 ">copyright &copy; 2024 by <b>Student Management System</b></p>
    </footer>
</body>
</html>
