<?php
session_start();
$_SESSION["login"] = array();
$_SESSION["role"] = array();
 
unset($_SESSION["login"]);      // destruction des variables de session.
unset($_SESSION["role"]);
 
if (ini_get("session.use_cookies"))  
{
    setcookie(session_name(), '', time()-42000);  // fait expirer en termes de date le cookie qui concerne le nom de la session.
}
 
session_destroy();  //détruit la session
header("location:../index.php");
?>