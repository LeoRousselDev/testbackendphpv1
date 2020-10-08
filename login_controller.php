<?php
session_start();
require("./connexiondb.php");
$db=connexionBase(); 
$errormsg = array(); //declare un tableau d'erreur


//$result = $db->query($requete); //Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement;

$_SESSION["login"] = $_POST["login"];
$_SESSION["password"] = $_POST["password"];








if (isset($_POST['connexion'])) { //on teste si la variable est définie
  
    if (!empty($_POST['login'])) { // verifie si le login contient quelque chose

        $requete = $db->prepare("SELECT user_id,user_login,user_password, user_role FROM utilisateurs WHERE user_login=:login;"); //récup les users 
        $requete->bindValue(':login',$_POST['login'], PDO::PARAM_STR); //requete préparée
        $requete->execute(); //execute la requete
        $user = $requete->fetch(PDO::FETCH_OBJ); //recup le resultat de la requete
        

        if ($user->user_login == $_POST['login']) {  //si le login correspond
            if (password_verify($_POST['password'], $user->user_password)) {   //ON compare le mot de passe saisie par l'utilisateur et celui de la base de données :
                $_SESSION['login'] = $_POST['login']; //variable session ou on stock le login
                header('Location:../views/table_sessions.php?user_id='.$_SESSION['id']);
            } else {
                //on stock message d'erreur dans le tableau si le mot de passe est incorrect 
                $errormsg['password']='Mot de passe incorrect';
            }  

        }else {
                //stock message d'erreur si login  incorrect
                $errormsg['login']='Login invalide';
            }
          }else {
                //stock message d'erreur si non identifiant 
                $errormsg['login']='Veuillez entrer votre identifiant';
            }
            
} 
