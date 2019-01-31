<?php
    require_once('connect.php');
        $id=$_POST['id'];
        
        $sql="SELECT * FROM `user` WHERE `id`=?";
        $stmt=mysqli_prepare($db,$sql);

        if(is_object($stmt)){
            mysqli_stmt_bind_param($stmt,'i',$id);
            mysqli_stmt_bind_result($stmt,$id,$username,$email,$password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            mysqli_stmt_fetch($stmt);
            if(mysqli_stmt_num_rows($stmt)){
                echo json_encode(['status'=>'success','id'=>$id,'username'=>$username,'email'=>$email,'password'=>$password]);
            }else{
                echo json_encode(['status'=>'erroe','message'=>'Error: Failed to insert data.']);
            }
        }
?>