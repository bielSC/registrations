<?php
$db = mysqli_connect('localhost','root','Salabiel88$','registration');
$updateErros =  array();



if(isset($POST['update_user'])){
    $newUsername = mysqli_real_escape_string($db,$_POST['username']);
    $newPassword = mysqli_real_escape_string($db,$_POST['password']);
    $newEmail = mysqli_real_escape_string($db,$_POST['email']);
    $newPhone = mysqli_real_escape_string($db,$_POST['phone']);

    $newEncryptedPass = md5($newPassword);

    $userUpdateQuery = "update users set username='$userName', password='$newEncryptedPass', email = '$newEmail', phone='$newPhone' where id= 6"; //Falta recollir id
    $result = mysqli_query($db,$userUpdateQuery);;

    if(!$result){
        array_push($updateErros,'Cannot update the database.');
    }
    else echo "user updated succesfully";
}
?>
