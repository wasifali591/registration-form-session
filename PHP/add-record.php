<?php
    require_once 'connect.php';

        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="INSERT INTO `user`(`username`,`email`,`password`) VALUES(?,?,?)";
        $stmt=mysqli_prepare($db,$sql);

        if(is_object($stmt)){
            mysqli_stmt_bind_param($stmt,'sss',$username,$email,$password);
            mysqli_stmt_execute($stmt);

            if(mysqli_stmt_affected_rows($stmt) ==1){
                echo json_encode(['status'=>'success','message'=>'Congratulation! Record inserted successfully.']);
            }else{
                echo json_encode(['status'=>'erroe','message'=>'Error: Failed to insert data.']);
            }
        }
?>