<?php
session_save_path();   //enregistrer les chemins
session_start();
require("./connexiondb.php");
$db=connexionBase();
                                                                        //password_verify — Vérifie qu'un mot de passe correspond à un hachage
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$log = $_POST["login"];
$pass = $_POST["password"];  

$_SESSION["nom"] = $nom;  // $_SESSION est une variable globale et fonctionne comme un tableau 
$_SESSION["prenom"] = $prenom;
$_SESSION["email"] = $email;
$_SESSION["login"] = $log;  
$_SESSION["password"] =  password_hash($pass,PASSWORD_DEFAULT); //password_hash — Crée une clé de hachage pour un mot de passe
password_verify($pass, $_SESSION["password"]); //password_verify — Vérifie qu'un mot de passe correspond à un hachage

	
	
if (!empty($_POST["nom"]) && (!empty($_POST["prenom"]) && (!empty($_POST["email"]) && (!empty($_POST["login"]) && (!empty($_POST["password"])))))) 
{
   $nom = htmlspecialchars($_POST["nom"]);
   $prenom = htmlspecialchars($_POST["prenom"]);            
   $email = htmlspecialchars($_POST["email"]);              //htmlspecialchars — Convertit les caractères spéciaux en entités HTML
   $log = htmlspecialchars($_POST["login"]);
   $pass = htmlspecialchars($_POST["password"]);  

   $insert = $db->prepare 
   (
       // crée une requète préparer 
    "INSERT INTO utilisateurs ( user_nom, user_prenom, user_mail, user_login, user_password) 
   VALUES (:nom, :prenom, :email, :log, :pass");
   
   $insert->bindValue(":nom", $_SESSION["nom"]);
   $insert->bindValue(":prenom", $_SESSION["prenom"]);
   $insert->bindValue(":email", $_SESSION["email"]);
   $insert->bindValue(":log", $_SESSION["login"]); 
   $insert->bindValue(":pass", $_SESSION["password"]); 
   
   
   
   $insert->execute();
   
   //header("location:../index.php");
  

   
} 
else 
{
   echo"Cette page nécessite une identification.";  
   //header("location:../views/form_session.php");
}

?>