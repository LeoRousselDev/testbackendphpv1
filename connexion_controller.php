<?php    
//session_save_path();   //enregistrer les chemins
session_start();
require("./connexiondb.php");
$db=connexionBase();  
                                                    
{
    $log = htmlspecialchars($_POST["login"]);
	$pass = $_POST["password"];

    if(!empty($log) && !empty($pass))
    {
        $requete = $db->prepare("SELECT * FROM utilisateurs WHERE user_login = ?");
        $requete->execute(array($log));

            $usersinfo = $requete->fetch();
            $_SESSION["user_id"] =  $usersinfo["user_id"];
            $_SESSION["user_login"] = $usersinfo["user_login"];
            $_SESSION["user_password"] = $usersinfo["user_password"];
            $_SESSION["user_role"] = $usersinfo["user_role"];
            var_dump($usersinfo["user_login"]);
            header("location:../views/table_sessions.php"); // renvoit à la page de profil de l'utilisateur

    }
    else
    {
        $erreur = "Veillez entrer vos informations de connexion.";
    }
}

?>