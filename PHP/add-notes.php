<?php
require_once 'connect.ph';
    $notes=$_POST['text'];
    $timestamp = time();
    $datetime=date("F d, Y h:i:s A", $timestamp);
    $userid=$_SESSION['username'];
    $sql="INSERT INTO `notes`(`userid`,`notes`,`time`) values(?,?,?)";

        $stmt=mysqli_prepare($db,$sql);

        if(is_object($stmt)){
            mysqli_stmt_bind_param($stmt,'sss',$userid,$notes,$datetime);
            mysqli_stmt_execute($stmt);

            // if(mysqli_stmt_affected_rows($stmt) ==1){
            //     echo json_encode(['status'=>'success','message'=>'Congratulation! Record inserted successfully.']);
            // }else{
            //     echo json_encode(['status'=>'erroe','message'=>'Error: Failed to insert data.']);
            // }
        }
?>