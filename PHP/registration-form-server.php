<!--
* File Name  : registration-form-server
* Description : php code to insert data into database from registration table
* Created date : 1/02/2019
* Author  : Md Wasif Ali
* Comments : 
-->
<?php
    require_once('connect.php');
    if (isset($_POST['registerButton'])) {
        //receive all input values from the form
        $username =$_POST['username'];
        $email =$_POST['email'];
        $newPassword = $_POST['password'];
        $confirmPassword =$_POST['confirmPassword'];
    
        if ($newPassword === $confirmPassword) {

            $sql ="SELECT * FROM `user` WHERE `username` = '".$_POST['username']."'";
            $query_run=mysqli_query($db,$sql);
            if(mysqli_num_rows($query_run)>0){
                echo '<script type="text/javascript">alert("User already exists. Try another user name")</script>';

            }else{
                $sql1="INSERT INTO `user`(`username`,`email`,`password`) VALUES('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."')";
                $result=mysqli_query($db,$sql1);
                if ($result) {
                    $_SESSION['username'] = $username;
                    header("location:home.php");
                    exit();
                }
            }
        }else{
            echo '<script type="text/javascript">alert("password not matched")</script>';
        } 
    }
?>