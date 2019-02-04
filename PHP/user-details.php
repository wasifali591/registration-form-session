<!--
* File Name  : user-details
* Description : php code to  fetch  user details using session id
* Created date : 1/02/2019
* Author  : Md Wasif Ali
* Comments :
-->
<?php 
    include('connect.php');
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM `user` WHERE `username` = '".$username."'";
	$result = mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result);
		$id = $row["id"];
		$username=$row["username"];
		$email=$row["email"];
		$password=$row["password"];
	}
?>