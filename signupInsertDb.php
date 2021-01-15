<?php
    session_start();
    include 'dbConn.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $ques = $_POST['ques'];
        $ans = $_POST['ans'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $confpass = $_POST['confpass'];

        if(isset($_SESSION['uEmail'])){
            $eAppr = 1;
            $mAppr = 0;
        }
        if(isset($_SESSION['uMob'])){
            $mAppr = 1;
            $eAppr = 0;
        }

        if($password == $confpass){
            $sql = "INSERT INTO `tbl_user`(`email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `password`, `security_question`, `security_answer`)
             VALUES('$email', '$name', '$mobile', '$eAppr', '$mAppr', 1, 0, '$password', '$ques', '$ans')";

            if(mysqli_query($conn, $sql)){
                echo "<script>alert('Accepted your input to database')</script>";
                header('refresh:0; url=login.php');
            }else{
            echo "Failed to signup Email Already used ". mysqli_error($conn);
            }
        }else{
            echo "<script>alert('Password does not matched')</script>";
        }
    }

    session_destroy();
?>