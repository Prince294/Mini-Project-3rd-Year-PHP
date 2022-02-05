<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $connect = mysqli_connect("localhost:8111","root","","smartSystem");
    if(mysqli_connect_error()){
        echo "<script>alert('Cannot connect to database');</script>";
        exit();
    }

    if(isset($_POST['search'])){
        $query = "SELECT * FROM `Vehicle1` WHERE `Vehicle Number` = '$_POST[Veh_no]'";
        $result = mysqli_query($connect ,$query);
        if($result){
            if(mysqli_num_rows($result)==1)
            {
                $result_fetch = mysqli_fetch_assoc($result);
                $_SESSION['Logged_in']=true;
                $_SESSION['veh_no']=$result_fetch['Vehicle Number'];
                $_SESSION['own_name']=$result_fetch['Owner Name'];
                $_SESSION['own_add']=$result_fetch['Owner Address'];
                $_SESSION['own_mob']=$result_fetch['Owner Mobile Number'];
                $_SESSION['own_email']=$result_fetch['Owner Email'];
                $own_email=$result_fetch['Owner Email'];
                $_SESSION['payment']=$result_fetch['Payment'];
                $payment=$result_fetch['Payment'];
                $_SESSION['veh_info']=$result_fetch['Vehicle Information'];
                $_SESSION['start_point']=$result_fetch['Starting Point'];
                $_SESSION['end_point']=$result_fetch['End Point'];

                if($payment>0)
                {
                    header("location: ../logged_in.php");
                }
                else{
                header("location: ../logged_in.php");
                }
            }
            else{
                header("location: ../index.php?error=1");
            }
        }
        else{
            echo "<script>alert('Something Went Wrong! Please do after sometime');</script>";
        }
    }

    if(isset($_POST['logout'])){
        header("location: ../index.php");
    }

?>