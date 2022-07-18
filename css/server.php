<?php

$username = "";
$password = "";
$age = "";
$weight = "";
$heightt = "";
$BMI = "";
$BMITag = "";
$Gender = "";
$ActivityRate = "";
$BMR = "";
$Calories = "";
$errors = array();

$db = mysqli_connect("localhost", "root", "", "reglogin") or die("Unable to connect");


    if(isset($_POST['reg']))  {

        $username = $mysqli -> real_escape_string($_POST['username']);
        $password = $mysqli -> real_escape_string($_POST['password']);
        $age = $mysqli -> real_escape_string($_POST['age']);
        $weight = $mysqli -> real_escape_string($_POST['weight']);
        $username = $mysqli -> real_escape_string($_POST['username']);
        $height = $mysqli -> real_escape_string($_POST['height']);
        $BMI = $mysqli -> real_escape_string($_POST['BMI']);
        $BMITag = $mysqli -> real_escape_string($_POST['BMITag']);
        $Gender = $mysqli -> real_escape_string($_POST['Gender']);
        $ActivityRate = $mysqli -> real_escape_string($_POST['ActivityRate']);
        $BMR = $mysqli -> real_escape_string($_POST['BMR']);
        $Calories = $mysqli -> real_escape_string($_POST['Calories']);
    }

        //form validation

if(empty($uersname)) {array_push($errors, "Username is required");}
if(empty($password)) {array_push($errors, "Password is required");}
if(empty($age)) {array_push($errors, "Age is required");}
if(empty($weight)) {array_push($errors, "Weight is required");}
if(empty($height)) {array_push($errors, "Height is required");}
if(empty($BMI)) {array_push($errors, "Body Mass Index is required");}
if(empty($BMITag)) {array_push($errors, "BMI_Tag is required");}
if(empty($Gender)) {array_push($errors, "Gender is required");}
if(empty($ActivityRate)) {array_push($errors, "Activity Rate is required");}
if(empty($BMR)) {array_push($errors, "BMR is required");}
if(empty($Calories)) {array_push($errors, "Daily Calories is required");}

//Register User
if(count($errors)==0) {

    $query = "INSERT INTO `user` (`username`, `password`, `age`, `weight`, `height`, `BMI`, `BMITag`, `Gender`, `ActivityRate`, `BMR`, `Calories`) VALUES ('$usname', '$paword', '$agec', '$wt', '$ht', '$bodymi', '$bmitag', '$gener', '$activity', '$basalmr', '$cals')";
    mysqli_query($db,$query);

}
?>

