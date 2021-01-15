<?php
    session_start();
    if(isset($_POST['verifyotp'])){
        $emailvarr = $_SESSION['Emailrand'];
        $verify = $_POST['verify'];
        if($verify == $emailvarr){
            echo "Congo Your OTP Matched";
            header("location:../account.php");
        }else{
            echo "<script>alert('You Entered wrong OTP')</script>";
        }
    }
?>