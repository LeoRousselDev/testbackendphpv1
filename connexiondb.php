
   <?php 


function connexionBase()
{
   // Paramètre de connexion serveur
   $host = "localhost:3308";
   $login= "root";     // identifiant d'accès au serveur 
   $password="";    // mot de passe pour s'identifier au serveur
   $base = "Jarditou";    // la base de données
 
   try 
   {
        	
    $db = new PDO('mysql:host=localhost;dbname=jarditou;charset=utf8', 'root', ''); // connexion à la base de donnée, une fois la connexion établie, $db devient un objet
        return $db; // la connexion établie, :$db permet d'utiliser toutes les méthodes de la PDO (query(), prepare(), execute() . . .)
    } 
    catch (Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    } 
}

?>
