<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["isloggedIn"]);
session_destroy();
header("Location: index.php");

?>