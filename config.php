<?php

session_start();

$username = "";
$password = "";
$age = "";
$weight = "";
$height = "";
$BMI = "";
$BMITag = "";
$Gender = "";
$ActivityRate = "";
$BMR = "";
$Calories = "";
$errors = array();

$db = mysqli_connect("localhost", "root", "", "reglogin") or die("Unable to connect");


    if(isset($_POST['reg']))  {

        $username = mysqli_real_escape_string($db, $_REQUEST['username']);
        $password = mysqli_real_escape_string($db, $_REQUEST['password']);

        //form validation
        if(empty($username)){

            array_push($errors, "Username is required");
        }
        if(empty($password)){

            array_push($errors, "Password is required");
        }


//Register User
    if(count($errors) == 0) {

    $query = "INSERT INTO user (username, password, age, weight, height, BMI, BMITag, Gender, ActivityRate, BMR, Calories) VALUES ('$username', '$password', '$age', '$weight', '$height', '$BMI', '$BMITag', '$Gender', '$ActivityRate', '$BMR', '$Calories')";
    mysqli_query($db,$query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Your Account has been created successfully";
        header('location: index1.php');

    }
    }

    if(isset($_POST['login']))  {

        $db = mysqli_connect("localhost", "root", "", "reglogin") or die("Unable to connect");
        
       
        $username = mysqli_real_escape_string($db, $_REQUEST['username']);
        $password = mysqli_real_escape_string($db, $_REQUEST['password']);

        if(empty($username)){

            array_push($errors, "Username is required");
        }
        if(empty($password)){

            array_push($errors, "Password is required");
        }

        if(count($errors) == 0) {

            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);
            
    
                if ($row['username'] === $username && $row['password'] === $password) 
             {
                
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Your Account has been created successfully";
                header('location: index1.php');

            } 
           
        }

    }
}

  
?>
