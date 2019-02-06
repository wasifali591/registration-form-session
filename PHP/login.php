<!--
* File Name  : login
* Description :check username and password from the data base for login
* Created date : 1/02/2019
* Author  : Md Wasif Ali
* Comments :
-->

<?php 
    //$_GET['errorMessage']='';
    require_once("connect.php");
    if (isset($_POST['signInButtonn'])) {
        $username =$_POST['username'];
        //echo $username;
        $password = $_POST['password'];
        $sql ="SELECT * FROM `user` WHERE `username` = '".$_POST['username']."' AND `password`='".$_POST['password']."'";
        $result=mysqli_query($db,$sql);
        if (mysqli_num_rows($result) > 0) {
            //$rowlog = mysqli_fetch_array($result);
            $_SESSION['username'] = $username;
            header("location:home.php");
            exit();
        }else{
            
            header("location:index.php?error=1");
        }
    }
?>