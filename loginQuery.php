<?php
    session_start();
    include 'dbConn.php';
    
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `tbl_user` WHERE email = '$email' AND password = '$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        $arr = mysqli_fetch_assoc($query);

        if($row && $arr['active'] == 1){
            if($arr['is_admin'] == 1){
                echo "Login Success<br>";
                $_SESSION['user'] = $email;
                echo "Hello admin : ".$_SESSION['user'];
                header('location:adminDash');
            }else{
                $_SESSION['user'] = $email;
                echo "Hello user : ".$_SESSION['user'];
            }
        }
        else{
            echo "<script>alert('UserName Or Password is Incorrect Or Register first')</script>";
        }
    }
?>