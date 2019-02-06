

<?php
    require_once('connect.php');
        $id=$_POST['id'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        //$password=$_POST['password'];

        $sql="UPDATE `user` SET `username`=?,`email`=? WHERE `id`=?";
        $stmt=mysqli_prepare($db,$sql);

        if(is_object($stmt)){
            mysqli_stmt_bind_param($stmt,'ssi',$username,$email,$id);           
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt) == 1){
                echo json_encode(['status'=>'success','message'=>'Congratulation! Record updated successfully.']);
            }else{
                echo json_encode(['status'=>'erroe','message'=>'Error: Failed to update data.']);
            }
        }
?>