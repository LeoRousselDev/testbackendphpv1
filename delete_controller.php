<?php
require "./connexiondb.php";// récupère la connexion de la base de données
$db = connexionBase();// appelle la connexion 
$requete = "DELETE FROM produits WHERE pro_id= :id"; // La requête de suppression
$delete = $db->prepare($requete); //prepare une requete
    $delete -> bindValue(':id',$_GET['pro_id']); // Associe une valeur à un nom correspondant ou à un point d'interrogation (comme paramètre fictif) dans la requête SQL qui a été utilisé pour préparer la requête.
  if ($delete->execute()) {// exec la requete
        header('location:../views/tableau.php');// renvoi sur la page des produits
    }
