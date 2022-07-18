<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["age"]);
unset($_SESSION["weight"]);
unset($_SESSION["height"]);
unset($_SESSION["BMI"]);
unset($_SESSION["BMITag"]);
unset($_SESSION["Gender"]);
unset($_SESSION["ActivityRate"]);
unset($_SESSION["BMR"]);
unset($_SESSION["Calories"]);

header("Location: index1.php");
?>