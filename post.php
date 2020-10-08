<?php

$controlName = "/^[A-Za-z][A-Za-z\é\è\ê\-]+$/";
$controlDate = "/^([0-2][0-9]|(3)[0-1])(/)(((0)[0-9])|((1)[0-2]))(/)\d{4}$/"; // date au format dd/mm/yy
$controlPostalCode = "/^[0-9]{5}+$/";
$controlEmail = "/^[a-zA-ZéèîïÊËÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÊËÎÏ][a-zéèêàçîï])?/";
$controlVille = "/^[A-Za-z][A-Za-z\é\è\ê\-]+$/";

if (empty($_POST["nom"]) || !preg_match($controlName,$_POST["nom"])) {       //si le champ nom est vide un message demandant de saisir le champ apparaît
     echo"Veuillez saisir votre nom en utilisant des caractères alphabétiques"."<br>";
} else {
    echo"Votre nom est : ".$_POST["nom"]."<br>";  //si la condition est fausse, l'information donnée sort
} 




if (empty($_POST["prenom"]) || !preg_match($controlName,$_POST["prenom"])) {
   echo"Veuillez saisir votre prénom en utilisant des caractères alphabétiques"."<br>";
} else {
    echo"Votre prénom est : ".$_POST["prenom"]."<br>";
}

echo"Genre : ".$_POST["sexe"]; //affiche le genre 

if (strlen($_POST["ddn"]) != 10) {  //strlen permet de contrôler le nombre de caractères, ici si il n y a pas 10 caractères, le message d'erreur apparaît .
   echo"Veuillez saisir votre Date De Naissance au format JJ/MM/AAAA"."<br>"; 
} else {
   echo"Date de naissance : ".$_POST["ddn"]."<br>"; //si la condition est fausse, l'information donnée sort
}



if (empty($_POST["cp"]) || !preg_match($controlPostalCode, $_POST["cp"])) { //il faut 5 caractères pas plus pas moins
    echo"Veuillez saisir votre Code Postal en utilisant cinq chiffres"."<br>"; 
} else {
    echo"Code postal : ".$_POST["cp"]."<br>";
}



if (empty($_POST["adresse"])){  //adresse
    echo"Veuillez saisir votre Adresse"."<br>"; 
} else {
    echo"Adresse : ".$_POST["adresse"]."<br>";
}



if (empty($_POST["ville"]) || !preg_match($controlVille, $_POST["ville"])){ // ville 
    echo"Veuillez saisir votre Ville"."<br>"; 
} else {
    echo"Ville : ".$_POST["ville"]."<br>";  //regex qui accepte lettres, tirets , lettres accentuées
}



if (empty($_POST["email"]) || !preg_match($controlEmail,$_POST["email"])){
    echo"Veuillez saisir votre Email sans oublier de respecter la syntaxe d'un email : XXXXX@XXXX.XXX"."<br>"; 
} else {
    echo"Émail : ".$_POST["email"]."<br>";
}



if (empty($_POST["question"])){
    echo"Veuillez saisir votre demande"."<br>"; 
} else {
    echo"Votre demande : ".$_POST["question"]."<br>";
}








//  || !preg_match($controlDate,$_POST["ddn"])
 ?>