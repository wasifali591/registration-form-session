<?php
require_once 'connect.php';
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];
$username = $_SESSION['username'];
$sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$oldPassword'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
        // //$rowlog = mysqli_fetch_array($result);
        // $_SESSION['username'] = $username;
        // header("location:home.php");
        // exit();
    if ($newPassword == $confirmPassword) {
        $sql1 = "UPDATE `user` SET `password`='$newPassword' WHERE `username`='$username'";
        mysqli_query($db, $sql1);
        header("location:home.php");
    }
}
?>