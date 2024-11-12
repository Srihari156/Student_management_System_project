<?php
     $db=new mysqli("localhost","root","","student");
     if($db->connect_error){
         die("connection failed". $db->connect_error);
     }

     $id = $_GET['id'];
     $result=$db->query("SELECT * FROM teacher_details where id='$id' ");
     $teachers=$result->fetch_assoc();
     if($_SERVER['REQUEST_METHOD']=='POST'){
         extract($_POST);
         $sql="UPDATE teacher_details set teacher_name='$teacher_name', qualification='$qualification',exp_no='$exp_no' where id='$id'";
         if($db->query($sql)){
             echo("your data scuccessfully updated");
             header("location: Teachersadd.php");
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
    <title>Teachers add modify</title>
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
    <form action="" method="POST">
            <div class="row-2 form-group">
                <div class="col-md-6 form-group">
                <label for="exampleFormControlInput1" class="form-label" title="Teacher Name" style="color:#f9d423;"><i class="bi bi-person"></i> Teacher Name:</label>
                <input type="text" class="form-control border-warning" id="exampleFormControlInput1"  placeholder="Enter Your Name" title="Teachers Name" value="<?= $teachers['teacher_name'] ?>" name="teacher_name" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                <label for="exampleFormControlInput1" class="form-label" title="Standards" style="color:#f9d423;">Standards:</label>
                <select class="form-select border-warning" aria-label="Default select example" title="Qualification" name="qualification" required>
                        <option value="">Select qualification</option>
                        <option value="B.E." <?=$teachers['qualification'] == 'B.E.' ? 'selected' : ''; ?>>B.E.</option>
                        <option value="B.com" <?= $teachers['qualification'] == 'B.com' ? 'selected' : ''; ?>>B.com</option>
                        <option value="B.sc" <?= $teachers['qualification'] == 'B.sc' ? 'selected' : ''; ?>>B.sc</option>
                        <option value="B.Ed" <?= $teachers['qualification'] == 'B.Ed' ? 'selected' : ''; ?>>B.Ed</option>
                        <option value="B.A" <?= $teachers['qualification'] == 'B.A' ? 'selected' : ''; ?>>B.A</option>
                        <option value="B.Ei.Ed." <?= $teachers['qualification'] == 'B.Ei.Ed.' ? 'selected' : ''; ?>>B.Ei.Ed.</option>
                        <option value="M.Ed" <?= $teachers['qualification'] == 'M.Ed' ? 'selected' : ''; ?>>M.Ed</option>
                        <option value="Diploma" <?= $teachers['qualification'] == 'Diploma' ? 'selected' : ''; ?>>Diploma</option>
                        <option value="M.E."  <?= $teachers['qualification'] == 'M.E.' ? 'selected' : ''; ?>>M.E.</option>
                        <option value="M.A." <?= $teachers['qualification'] == 'M.A.' ? 'selected' : ''; ?>>M.A.</option>
                        <option value="M.Sc." <?= $teachers['qualification'] == 'M.Sc.' ? 'selected' : ''; ?>>M.Sc.</option>
                        <option value="M.Com."  <?= $teachers['qualification'] == 'M.Com.' ? 'selected' : ''; ?>>M.Com.</option>
            </select>
            </div>
            <div class="col-md-6 form-group mt-3">
                <label for="exampleFormControlInput1" class="form-label" title="Experience" style="color:#f9d423;">Experience:</label>
                <select class="form-select border-warning" aria-label="Default select example" title="Experience" name="exp_no" required>
                        <option value="">Select Experience</option>
                        <option value="Fresher" <?= $teachers['exp_no'] == 'Fresher' ? 'selected' : ''; ?>>Fresher</option>
                        <option value="1 Year"  <?= $teachers['exp_no'] == '1 Year' ? 'selected' : ''; ?>>1 Year</option>
                        <option value="2 Year" <?= $teachers['exp_no'] == '2 Year' ? 'selected' : ''; ?>>2 Year</option>
                        <option value="3 Year" <?= $teachers['exp_no'] == '3 Year' ? 'selected' : ''; ?>>3 Year</option>
                        <option value="4 Year" <?= $teachers['exp_no'] == '4 Year' ? 'selected' : ''; ?>>4 Year</option>
                        <option value="5 Year"  <?= $teachers['exp_no'] == '5 Year' ? 'selected' : ''; ?>>5 Year</option>
                        <option value="6 Year" <?= $teachers['exp_no'] == '6 Year' ? 'selected' : ''; ?>>6 Year</option>
                        <option value="7 Year" <?= $teachers['exp_no'] == '7 Year' ? 'selected' : ''; ?>>7 Year</option>
                        <option value="8 Year" <?= $teachers['exp_no'] == '8 Year' ? 'selected' : ''; ?>>8 Year</option>
                        <option value="9 Year" <?= $teachers['exp_no'] == '9 Year' ? 'selected' : ''; ?>>9 Year</option>
                        <option value="10 Year" <?= $teachers['exp_no'] == '10 Year' ? 'selected' : ''; ?>>10 Year</option>
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
                <input type="submit" class="btn btn-warning text-white" value="Submit" name="submit">
            </div>
        </form>
    </div>
    <footer style="height: 10px; align-items: bottom; margin-top: 350px;" >
        <p class="text-center bg-dark text-warning p-3 ">copyright &copy; 2024 by <b>Student Management System</b></p>
    </footer>
</body>
</html>