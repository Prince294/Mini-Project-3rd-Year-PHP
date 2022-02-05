<script src="../js/script.js" type="text/javascript"></script>
<?php

    $connect = mysqli_connect('localhost:8111','root','','smartSystem');
    if(mysqli_connect_error()){
        echo "<script>alert('Cannot connect to database');</script>";
        exit();
    }


    $veh_no = "UP37D3874";
    if(isset($_POST['data_submit']))
    {    

        $user_exist_query = "SELECT * FROM `vehicle` WHERE `Vehicle Number` = '$veh_no'";
        $result = mysqli_query($connect,$user_exist_query);

        if($result){
            if(mysqli_num_rows($result)>0){
                // $pole = "<script>document.write(pole_no2)</script>";
                $result_fetch = mysqli_fetch_assoc($result);
                $query = "UPDATE `vehicle` SET `Payment`='10',`End Point`='Pole' WHERE `Vehicle Number`='$veh_no'";
                mysqli_query($connect,$query);
            }
        }
        else{
            
        }
        // header("location: ../index.php");
    }
    
    if(isset($_POST['submit'])){
        $var = "<script>document.write(car1)</script>";
    }

?>
