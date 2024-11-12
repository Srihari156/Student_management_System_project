<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Standards</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="https://img.icons8.com/emoji/48/school-emoji.png" alt="school-emoji" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="font-family: 'Kanit',sans-serif;">
<?php include 'loadingpage.php' ?>
<header class="bg-warning text-white p-2"><img width="48" height="48" src="https://img.icons8.com/emoji/48/school-emoji.png" alt="school-emoji"/>Student Management System</header>
    <div class="container" style="margin-top: 100px;">
        <div class="text-center text-warning">
            To Students check the standards
        </div>
        <div class="input-group mb-3 mt-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control border-warning" id="live_search" placeholder="Search Students Standards ....." rel="icon"  autocomplete="off">
        </div>
        <div id="searchresult"></div>
        <p class="h5 mt-5 text-center">TO check the class attendence wise here => <a href="attendance.php" class="btn btn-warning text-white">Class Attendence</a></p>
        <p class="h5 mt-5 text-center">TO check the teachers name here => <a href="Teachersadd.php" class="btn btn-warning text-white">Teachers Add</a></p>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var input = $(this).val();
                // alert(input);
                if (input != ''){
                    $.ajax ({
                        url: 'livedata.php',
                        method:"POST",
                        data:{input:input},
                        success:function (data){
                            $("#searchresult").html(data).show();
                            // $("#searchresult").css("display", "block"); 
                        }
                    });
                }
                else{
                    $("#searchresult").hide();
                }

            })
        })
    </script>
     <footer style="height: 10px; align-items: bottom;" >
        <p class="text-center bg-dark text-warning p-3 ">copyright &copy; 2024 by <b>Student Management System</b></p>
    </footer>
</body>
</html>