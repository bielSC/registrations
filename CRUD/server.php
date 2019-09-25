<?php 
 
$connection = mysqli_connect('localhost','root','Salabiel88$','registration');

$query = "select * from users";
$result = mysqli_query($connection,$query);
include 'table.php';
?>
