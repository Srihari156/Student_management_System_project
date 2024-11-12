<?php

    $db=new mysqli("localhost","root","","student");
    if($db->connect_error){
        die("connection failed". $db->connect_error);
    }

    if(isset($_POST['input'])){
        $input=$_POST['input'];
        $sql="select * from details where standards LIKE '%$input%'";
        $result=$db->query($sql);
        if($result->num_rows>0){?>
            <table class="table table-striped table-bordered border-warning mt-3">
                <thead>
                    <tr class="bg-dark text-warning">
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                while($row=$result->fetch_assoc()){
                    $name=$row['name'];
                    $age=$row['age'];
                    $mobile_no=$row['mobile_no'];
                    $address=$row['address'];
                    $city=$row['city'];
                    $state=$row['state'];
                    $dob=$row['dob'];
                    $standards=$row['standards'];
                    $father_name=$row['father_name'];
                    $father_job=$row['father_job'];
                    $mother_name=$row['mother_name'];
                    $mother_job=$row['mother_job'];
                    $gender=$row['gender'];
                    ?>
                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $mobile_no; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $city; ?></td>
                        <td><?php echo $state; ?></td>  
                        <td><?php echo $dob; ?></td>
                        <td><?php echo $standards; ?></td>
                        <td><?php echo $father_name; ?></td>
                        <td><?php echo $father_job; ?></td>
                        <td><?php echo $mother_name; ?></td>
                        <td><?php echo $mother_job; ?></td>
                        <td><?php echo $gender; ?></td>
                    </tr>
                 
                 

            <?php }?>
                </tbody>

            </table>
            
            
            
            
       <?php }
        else{
            echo "<h3 class='text-center mt-5 text-danger'>No details found</h3>";
        }
    }
    $db->close();
?>