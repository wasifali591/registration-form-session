<!--
* File Name  : logout
* Description :
* Created date : 1/02/2019
* Author  : Md Wasif Ali
* Comments :
-->

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