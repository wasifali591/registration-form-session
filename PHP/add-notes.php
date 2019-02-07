<?php
    require_once 'connect.php';
    $note = $_POST['note'];
    $now = new DateTime();
    $datetime = $now->format('Y-m-d H:i:s');
    $username = $_SESSION['username'];
    $sql = "INSERT INTO `notes`(`username`,`note`,`time`) VALUES('$username','$note','$datetime')";
    mysqli_query($db,$sql);
    header("location:all-records.php");
    
?>
