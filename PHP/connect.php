<?php
session_start();
// connect to the database
$db = new mysqli('localhost', 'root', '', 'registration');
// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// }else{
//   echo "Connected successfully";
// }
?>