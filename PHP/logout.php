<?php   
        require_once('connect.php');
        session_destroy();
        $id = "";
        $username="";
        $email="";
        $password="";
        header("location:index.php");
        exit();
?>