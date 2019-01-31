<?php
    require_once('connect.php');

        $id=$_POST['id'];
        

        $sql="DELETE FROM `user` WHERE `id`=?";
        $stmt=mysqli_prepare($db,$sql);

        if(is_object($stmt)){
            mysqli_stmt_bind_param($stmt,'i',$id);
           
            mysqli_stmt_execute($stmt);

            if(mysqli_stmt_affected_rows($stmt) == 1){
                echo json_encode(['status'=>'success','message'=>'Congratulation! Record deleted successfully.']);
            }else{
                echo json_encode(['status'=>'erroe','message'=>'Error: Failed to delete data.']);
            }
        }
?>