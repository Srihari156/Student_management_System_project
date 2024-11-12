<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: Loginpage.php");
    exit();

    // if(isset($_SESSION['name'])){
    //     header("location: student_management_system.php");
    //     exit();
    // }
?>