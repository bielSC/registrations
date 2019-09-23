<?php
session_start();

//initialize variables
$username = "";
$email = "";
$errors = array();

//Connect to database

$database = mysqli_connect('localhost','root','Salabiel88$','registration');
mysqli_query($databse,"SET NAMES 'utf8'");

//Register the user{
if(isset($_POST['reg_user'])){
    $username = mysqli_real_escape_string($database,$_POST['username']);
    $email = mysqli_real_escape_string($database,$_POST['email']);
    $password_1 = mysqli_real_escape_string($databse,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($databse,$_POST['password_2']);

    //FORM VALIDATION WITH ARRAY ERRORS
    if(empty($username)){array_push($errors,'username is required'); }
    if(empty($email)){array_push($errors,'email is required');}
    if(empty($password_1)){arrray_push($errors,'password  is requires');}
    if($password_1 != $password_2){array_push($errors,'The two password do not match');}

//Check if the username or the email already exists
$user_check_query = "select * from users where username='$username' or email='$email' limit 1";
$result = mysqli_query($database,$user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['username'] === $username){
        array_push($errors,'username already exists');
    }
    if($user['email'] === $email){
        array_push($errors,'email already exists');
    }
}
//register the user if there are no errors
if(count($errors) == 0){
    $password = md5($password_1);

    $registration_query = "insert into users(username,email,password)
    values('$username','$email','$password')";

    mysqli_query($database,$registration_query);
    $_SESSION['username'] = $username;
    $_SESSION['succes'] = "you are now logged in";
    header('location: index.php');
    }
}
if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($database,$_POST['username']);
    $password = mysqli_real_escape_string($database,$_POST['password']);
        if(empty($username)){
            array_push($errors,'Username is required');
        }
        if(empty($password)){
            array_push($errors,'password is required');
        }
        if(count($errors) == 0){
            $password = md5($password);
            $query = "select * from users where username='$username' and password='$password'";
            $result = mysqli_query($database,$query);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['succes'] = 'you are now logged in';
                header('location: index.php');
            }else{
                array_push($errors,'wrong password or username');
        }
    }
}


?>

