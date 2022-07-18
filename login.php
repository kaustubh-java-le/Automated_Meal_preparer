<?php

    include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
  body {
    background:
          /* top, transparent black, faked with gradient */ 
          linear-gradient(
            rgba(0, 0, 0, 0.7), 
            rgba(0, 0, 0, 0.7)
          ),
    url('image/food4.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
  }
  </style>
<body>
  <div id = "main-wrapper">
    <center><h1 style="color:	#006400; font-size: 50px;">LOGIN</h1></center>
    <center><img src="image/icon2.jpg" class = avatar/></center><br><br>

    <form  action="login.php" method="POST">
      <label style="color:	#228b22; font-size: 25px; font-weight: bold;">Username</label>
      <center><input type="text" class="inputvalues" name = "username" placeholder="Type your username"/><br><br><br></center>
      <label style="color:	#228b22; font-size: 25px; font-weight: bold">Password </label>
      <center><input type="password" class="inputvalues" name = "password" placeholder="Type your password"/><br><br><br></center>
     <center><input type="submit" id="login_btn" name="login" value="LOGIN"/></center>

    </form>
  </div>
</body>
</html>