<?php

require("./connexiondb.php");


$log = $_POST["login"];
$pass = $_POST["password"];

session_start();
 
$_SESSION["login"] = $log;
$_SESSION["password"] =  $pass;

	
	
if ($_SESSION["login"] && $_SESSION["password"]) 
{
   header("location:../Jarditou/index.php");
} 
else 
{
   echo"Cette page nécessite une identification.";  
}



$db=connexionBase();

$name =$_POST["login"];

$mdp =$_POST["password"];

$insert = $db->prepare 
(
    // crée une requète préparer 
 "INSERT INTO utilisateurs (user_name, user_password) 
VALUES (:nom, :pass)");

$insert->bindValue(":nom", $name); /* insère la catégorie du produit et change le type de donnée en entier */
$insert->bindValue(":pass", $mdp); /* insère la référence de produit  */



$insert->execute(); 

var_dump($insert);
var_dump($name);
var_dump($mdp);
var_dump($_POST);


?>