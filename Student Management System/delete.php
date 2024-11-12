<?php
$db=new mysqli("localhost","root","","student");
if($db->connect_error){
    die("connection failed". $db->connect_error);
}
$id=$_POST['id'];
    
$sql="DELETE FROM details WHERE id='$id'";

if($db->query($sql)){
    echo "your data succesfully deleted";
    header("location: student_management_system.php");
}
else{
    echo "your data not deleted";
}

$db->close();
?>