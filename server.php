<?php

session_start();

$username = "";
$password = "";

$db = mysqli_connect("localhost", "root", "", "reglogin") or die("Unable to connect");

if(isset($_POST['login']))  {

    $db = mysqli_connect("localhost", "root", "", "reglogin") or die("Unable to connect");
    
   
    $username = mysqli_real_escape_string($db, $_REQUEST['username']);
    $password = mysqli_real_escape_string($db, $_REQUEST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $query_run = mysqli_query($db,$query);
    if(mysqli_num_rows($query_run)>0){

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are logged in successfully";
        header('location: index1.php');

    }

}

?>