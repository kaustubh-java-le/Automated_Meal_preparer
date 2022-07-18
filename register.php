<?php

    include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style1.css">
</head>
<style>
  body {
    background:
          /* top, transparent black, faked with gradient */ 
          linear-gradient(
            rgba(0, 0, 0, 0.7), 
            rgba(0, 0, 0, 0.7)
          ),
    url('image/food7.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
  }
  </style>
<body>
  <div id = "main-wrapper" style="width: 500px;
    margin: 0 auto;
    background:white;
    padding: 5px;
    border-radius: 2px #2c3e50;
    height: 655px;">
    <center><h1 style="color:#006400; font-size: 55px;">Create Your Account</h1></center><br><br>

    <center><img src="image/icon2.jpg" class = avatar/></center><br><br>



    <form  action="" method="post">

        <label style="color: #006400; font-size: 25px; font-weight: bold; ">Username:</label>
        <input style= "width: 60%;"type="text" class="inputvalues" name="username" placeholder="Type your username"/><br><br><br>

        <label style="color: #006400; font-size: 25px; font-weight: bold">Password:</label>
        <input style= "width: 60%;" type="password" class = "inputvalues" name="password" placeholder="Type your password"/><br><br><br>

        
        

        <center><input style="background-color: #006400;
    padding: 6px;
    color: white;
    width: 32%;
    height: 48px;
    font-size: 22px;
    text-align: center;
    border-radius: 6px;" type="submit" id="reg_btn" value="Register" name="reg"/></center>

    </form>
  </div>
  <script src="main.js"></script>
</body>
</html>