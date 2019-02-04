<!--
* File Name  : update-record
* Description : php code to update database
* Created date : 1/02/2019
* Author  : Md Wasif Ali
* Comments : 
-->

<?php
    require_once('connect.php');
        $id=$_POST['id'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="UPDATE `user` SET `username`=?,`email`=?,`password`=? WHERE `id`=?";
        $stmt=mysqli_prepare($db,$sql);

        if(is_object($stmt)){
            mysqli_stmt_bind_param($stmt,'sssi',$username,$email,$password,$id);           
            mysqli_stmt_execute($stmt);
           
            //mysqli_stmt_fetch($stmt);
            //echo $fname;

            if(mysqli_stmt_affected_rows($stmt) == 1){
                echo json_encode(['status'=>'success','message'=>'Congratulation! Record updated successfully.']);
            }else{
                echo json_encode(['status'=>'erroe','message'=>'Error: Failed to update data.']);
            }
        }
?>