<?php

$servername = "localhost";
$username = "root";
$password = "";

try{
   $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username , $password);
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo "erreur : ".$e->getmessage();

}

if(isset($_POST['ok'])){
    $identifiant = $_POST['identifiant'];
   $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0 , :identifiant , :email , :mdp)");
    $requete->execute(
        array(
            "identifiant" => $identifiant,
            "email" => $email,
            "mdp" => $mdp
        )
    );
    header("Location: rechercher.php");        

}

?>