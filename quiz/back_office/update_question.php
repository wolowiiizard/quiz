<?php

//recuperation des données saisies en html
$Id = $_POST["upd_id"];
$Label = $_POST["label"];


/*echo $Label . $Id;*/

//parametre du srv bdd
$servername = 'localhost';
$dbname = 'quiz'; // nom de base de bdd
$user = 'root'; // utilisateur de la bdd
$pass = ''; // mot de passe vide


try {

    //connexion bdd
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$pass) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

    //requete sql
    $bdd->query('UPDATE questions SET label = "'.$Label.'" WHERE id="'.$Id.'" ');

    header("location:gestion_back.php");
    
} catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}