<?php 


$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'votingapp';
   
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn){
    die('connection failed'.mysqli_error($conn));
    exit();
} 


?>