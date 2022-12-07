<?php
session_start();
if(isset($_SESSION["isloggedIn"]) && $_SESSION["isloggedIn"]){
   header("Location: dashboard.php");
 }
   $username = "Hudoyberdi";
   $password = "noobman";
   if ($_POST["username"] == $username && $password == $_POST["password"]){
      $_SESSION["isloggedIn"] = true;
      $_SESSION["username"] = $username;
      header("Location: dashboard.php");
   }else{
      $_SESSION["message"] = "Malumotlar xato kiritildi";
   header ("Location: index.php");
   }


?>